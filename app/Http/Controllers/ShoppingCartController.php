<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Models\Product;
use App\Models\Product_img;
use App\Models\ShoppingCart;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderComplete;





class ShoppingCartController extends Controller
{

    public function add_cart(Request $request){
        $product = Product::find($request->product_id);
        //檢查輸入的購買數量合理不合理
        // dd($product->product_qty);
        if ($request->add_qty > $product->number){
            $result = [
                'result' => 'error',
                'message'  => '欲購買數量超過庫存，請聯絡客服',
            ];
            return $result;
        }elseif ($request->add_qty < 1) {
            $result = [
                'result' => 'error',
                'message'  => '購買數量異常，請重新確認',
            ];
            return $result;
        }
        //檢查是否有登入 !Auth::check() 因為有加上! 反轉判斷結果, 所以現在 沒有登入 = true
        if (!Auth::check()){
            $result = [
                'result' => 'error',
                'message'  => '尚未登入, 請先登入',
            ];
            return $result;
        }

        ShoppingCart::create([
            'product_id'=> $request->product_id,
            'user_id'=> Auth::user()->id,
            'qty'=> $request->add_qty,
        ]);
        $result = [
            'result' => 'success',
        ];
        return $result;

    }

    // 刪除購物車品項
    public function delete_cart($id){

        ShoppingCart::find($id)->delete();
        return redirect('/shopping1');
    }


    public function step01(){

        //登入的使用者ID, 為了搜尋屬於他的購物清單
        $user = Auth::id();
        $shopping = ShoppingCart::where('user_id',$user)->get();
        // dd($shopping);
        //每次從資料庫抓資料出來都應當先dd一下確認是否有抓對
        $subtotal = 0;
        // dd($subtotal);
        foreach ($shopping as $value) {
            $subtotal += $value->qty * $value->product->price;
        }
        // dd($value->product->product_price);

        // for ($i=0; $i < count($shopping); $i++) {
        //     $item = $shopping[$i]->product;
        //     dump($item->product_name);
        //     dump($item->img_path);
        //     dump($item->product_qty);
        // }

        // foreach ($shopping as $item ) {
        //     dump($item->product->product_name);
        //     dump($item->product->img_path);
        //     dump($item->product->product_qty);
        // }


        return view('shopping.checkedout1',compact('shopping','subtotal'));
    }


    public function step02(Request $request){

         // 不使用session 直接將新數量寫入購物車(待買清單)的資料表
         $shopping = ShoppingCart::where('user_id', Auth::id())->get();
        //  dd($request->qty);
         
         //事先將新的數量更新至資料表中
         foreach ($shopping as $key => $item) {
             $item->qty = $request->qty[$key];
             $item->save();
         }
       

        return view('shopping.checkedout2');
    }


    public function step03(Request $request){
    
        session([
            // key and value; (鍵 與 值)
            'pay' => $request->pay,
            'deliver' => $request->deliver,
        ]);
        
        $deliver = $request->deliver;
        // dd($deliver);

        return view('shopping.checkedout3', compact('deliver'));
    }


    public function step04(Request $request){

        //dump(session()->all());
        //dd($request->all());

        
        //為了計算單價 將購物車根據使用者的id抓出來
        $merch = ShoppingCart::where('user_id',Auth::id())->get();
        $subtotal = 0;
        // dd($merch);
        
        //如果購物車的數量有在第一步驟更新到最新
         foreach ($merch as $value) {
            $subtotal += $value->qty * $value->product->product_price;
        }

        //根據取貨方式決定運費金額。1.黑貓宅急便 : $150; 2.店到店 : $60
        if (session()->get('deliver') == "1") {
            $fee = 150;
        }else{
            $fee = 60;
        }


        $order = Order::create([
            'subtotal' => $subtotal,
            'shipping_fee' => $fee,
            'total' => $subtotal + $fee,
            'product_qty' => count($merch),
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,          
            'pay_way' => session()->get('pay'),
            'shipping_way' => session()->get('deliver'),      
            'status' => 1,
            'user_id' => Auth::id(),
        ]);
        
        
        if ($order->shipping_way == 1) {
    
            //如果運送方式(shipping_ way）是1 代表是黑貓宅急便 地址要填入address
            $order->address = $request->code.$request->city.$request->address;
            // dd($order);
        }else{
            //如果運送方式(shipping_ way)是2代表是店到店 地址要填入store_address
            $order->store_address = $request->code.$request->city.$request->address;
        }
        
     
        //任何改動的資料都需要儲存資料 save()
        $order->save();
        // dd($order);

        foreach ($merch as $key => $value) {
            OrderDetail::create([
               
                'product_id' => $value->product->id,
                'qty' => $value->qty,
                'price' => $value->product->price,
                'order_id' => $value->id,
            ]);
            
        }


        // 訂單建立成功, 將購物車資料清除
        ShoppingCart::where('user_id', Auth::id())->delete();
        //訂單建立成功，寄信通知使用者

        $data = [
            'order_id' => $order->id,
            'user_name'=>Auth::user()->name,
            'subject'=>'來自ＸＸ通知'
        ];

        Mail::to(Auth::user()->email)->send(new OrderComplete($data));
    
        return redirect('/show_order/'.$order->id);
    }

    public function  show_order($id){
        $order = Order::find($id);
        return view('shopping.checkedout4',compact('order'));
    }

    
    
}
