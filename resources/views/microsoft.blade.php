<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Microsoft - 雲端、電腦、應用程式和遊戲</title>
    <link rel="SHORTCUT ICON" href="https://c.s-microsoft.com/favicon.ico?v2" type="image/x-icon">
    <!-- style -->
    <link rel="stylesheet" href="{{asset('css/Microsoft.css')}}" />
    <!-- material icons -->
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined"
      rel="stylesheet"
    />
    <!-- Link Swiper's CSS -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
  </head>
  <body>
    <header>
      <nav class="header">
        <div class="header_wrapper">
          <!-- mobile menu -->
          <div class="hamburger-menu">
            <input id="menu__toggle" type="checkbox" />
            <label class="menu__btn" for="menu__toggle">
              <span></span>
            </label>

            <ul class="menu__box">
              <li><a class="menu__item" href="#">Microsoft 365</a></li>
              <li><a class="menu__item" href="#">Office</a></li>
              <li><a class="menu__item" href="#">Windows</a></li>
              <li><a class="menu__item" href="#">Surface</a></li>
              <li><a class="menu__item" href="#">Xbox</a></li>
              <li><a class="menu__item" href="#">支援</a></li>

              <li tabindex="1" class="dropdown">軟體
                <div class="arrow">
                  <span tabindex="1" class="material-icons-outlined">expand_more</span>
                  <span tabindex="1" class="material-icons-outlined">expand_less</span>
                </div>

                <div tabindex="1" class="dropdown_menu">
                  <ul>
                    <li><a class="menu__item" href="#">Windows 應用程式</a></li>
                    <li><a class="menu__item" href="#">OneDrive</a></li>
                    <li><a class="menu__item" href="#">Outlook</a></li>
                    <li><a class="menu__item" href="#">Skype</a></li>
                    <li><a class="menu__item" href="#">OneNote</a></li>
                    <li><a class="menu__item" href="#">Microsoft Teams</a></li>
                  </ul>
                </div>
              </li>

              <li tabindex="1" class="dropdown">個人電腦和設備
                <div class="arrow">
                  <span tabindex="1" class="material-icons-outlined">expand_more</span>
                  <span tabindex="1" class="material-icons-outlined">expand_less</span>
                </div>

                <div tabindex="1" class="dropdown_menu">
                  <ul>
                    <li><a class="menu__item" href="#">選購 Xbox</a></li>
                    <li><a class="menu__item" href="#">電腦配件</a></li>
                  </ul>
                </div>
              </li>

              <li tabindex="1" class="dropdown">娛樂
                <div class="arrow">
                  <span tabindex="1" class="material-icons-outlined">expand_more</span>
                  <span tabindex="1" class="material-icons-outlined">expand_less</span>
                </div>

                <div tabindex="1" class="dropdown_menu">
                  <ul>
                    <li><a class="menu__item" href="#">Xbox Game Pass Ultimate</a></li>
                    <li><a class="menu__item" href="#">Xbox Live Gold</a></li>
                    <li><a class="menu__item" href="#">Xbox 與遊戲</a></li>
                    <li><a class="menu__item" href="#">電腦遊戲</a></li>
                    <li><a class="menu__item" href="#">Windows 遊戲</a></li>
                  </ul>
                </div>
              </li>

              <li tabindex="1" class="dropdown">商務適用
                <div class="arrow">
                  <span tabindex="1" class="material-icons-outlined">expand_more</span>
                  <span tabindex="1" class="material-icons-outlined">expand_less</span>
                </div>

                <div tabindex="1" class="dropdown_menu">
                  <ul>
                    <li><a class="menu__item" href="#">Microsoft Cloud</a></li>
                    <li><a class="menu__item" href="#">Microsoft Azure</a></li>
                    <li><a class="menu__item" href="#">Microsoft Dynamics 365</a></li>
                    <li><a class="menu__item" href="#">Microsoft 365</a></li>
                    <li><a class="menu__item" href="#">Windows 365</a></li>
                    <li><a class="menu__item" href="#">Microsoft Industry</a></li>
                    <li><a class="menu__item" href="#">選購商務版</a></li>
                  </ul>
                </div>
              </li>

              <li tabindex="1" class="dropdown">Developer & IT
                <div class="arrow">
                  <span tabindex="1" class="material-icons-outlined">expand_more</span>
                  <span tabindex="1" class="material-icons-outlined">expand_less</span>
                </div>

                <div tabindex="1" class="dropdown_menu">
                  <ul>
                    <li><a class="menu__item" href="#">.NET</a></li>
                    <li><a class="menu__item" href="#">Visual Studio</a></li>
                    <li><a class="menu__item" href="#">Windows Server</a></li>
                    <li><a class="menu__item" href="#">開發 Windows 應用程式</a></li>
                    <li><a class="menu__item" href="#">文件</a></li>
                    <li><a class="menu__item" href="#">Power Platform</a></li>
                    <li><a class="menu__item" href="#">Power Apps</a></li>
                  </ul>
                </div>
              </li>

              <li tabindex="1" class="dropdown">其他
                <div class="arrow">
                  <span tabindex="1" class="material-icons-outlined">expand_more</span>
                  <span tabindex="1" class="material-icons-outlined">expand_less</span>
                </div>

                <div tabindex="1" class="dropdown_menu">
                  <ul>
                    <li><a class="menu__item" href="#">Microsoft Rewards </a></li>
                    <li><a class="menu__item" href="#">免費下載與安全性</a></li>
                    <li><a class="menu__item" href="#">教育</a></li>
                    <li><a class="menu__item" href="#">禮品卡 </a></li>
                    <li><a class="menu__item" href="#">文件</a></li>
                    <li><a class="menu__item" href="#">Licensing</a></li>
                  </ul>
                </div>
              </li>

              <li><a class="menu__item" href="#">檢視網站地圖</a></li>
            </ul>

          </div>


            <!-- web menu -->
          <div class="header_right">
            <div class="logo">
              <img
                src="https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RE1Mu3b?ver=5c31"
                alt=""
              />
            </div>
            <ul class="menu">
              <li><a class="menu_one font_style" href="">Microsoft 365</a></li>
              <li><a class="menu_two font_style" href="">Office</a></li>
              <li><a class="menu_three font_style" href="">Windows</a></li>
              <li><a class="menu_four font_style" href="">Surface</a></li>
              <li><a class="menu_five font_style" href="">Xbox</a></li>
              <li><a class="menu_five font_style" href="">支援</a></li>
            </ul>
          </div>

          <div class="header_left">
            <ul class="function">
              <li class="dropdownA" tabindex="1">
                <div tdivbindex="1" class="header_dropdown font_style"><p>所有 Microsoft</p>
                  <span class="material-icons-outlined">expand_more</span>
                </div>
                <div class="i_am_hidden_menu">
                   <ul class="microsoft_dropdown">
                    <li><span>軟體</span>
                      <ul >
                        <li><a class="menu__item" href="#">Windows 應用程式</a></li>
                        <li><a class="menu__item" href="#">OneDrive</a></li>
                        <li><a class="menu__item" href="#">Outlook</a></li>
                        <li><a class="menu__item" href="#">Skype</a></li>
                        <li><a class="menu__item" href="#">OneNote</a></li>
                        <li><a class="menu__item" href="#">Microsoft Teams</a></li>
                      </ul>
                    </li>
                    <li><span>個人電腦和設備</span>
                      <ul>
                        <li><a class="menu__item" href="#">選購 Xbox</a></li>
                        <li><a class="menu__item" href="#">電腦配件</a></li>
                      </ul>
                    </li>
                    <li><span>娛樂</span>
                      <ul>
                        <li><a class="menu__item" href="#">Xbox Game Pass Ultimate</a></li>
                        <li><a class="menu__item" href="#">Xbox Live Gold</a></li>
                        <li><a class="menu__item" href="#">Xbox 與遊戲</a></li>
                        <li><a class="menu__item" href="#">電腦遊戲</a></li>
                        <li><a class="menu__item" href="#">Windows 遊戲</a></li>
                      </ul>
                    </li>
                    <li><span>商務適用</span>
                      <ul>
                        <li><a class="menu__item" href="#">Microsoft Cloud</a></li>
                        <li><a class="menu__item" href="#">Microsoft Azure</a></li>
                        <li><a class="menu__item" href="#">Microsoft Dynamics 365</a></li>
                        <li><a class="menu__item" href="#">Microsoft 365</a></li>
                        <li><a class="menu__item" href="#">Windows 365</a></li>
                        <li><a class="menu__item" href="#">Microsoft Industry</a></li>
                        <li><a class="menu__item" href="#">選購商務版</a></li>
                      </ul>
                    </li>
                    <li><span>Developer & IT</span>
                      <ul>
                        <li><a class="menu__item" href="#">.NET</a></li>
                        <li><a class="menu__item" href="#">Visual Studio</a></li>
                        <li><a class="menu__item" href="#">Windows Server</a></li>
                        <li><a class="menu__item" href="#">開發 Windows 應用程式</a></li>
                        <li><a class="menu__item" href="#">文件</a></li>
                        <li><a class="menu__item" href="#">Power Platform</a></li>
                        <li><a class="menu__item" href="#">Power Apps</a></li>
                      </ul>
                    </li>
                    <li><span>其他</span>
                      <ul>
                        <li><a class="menu__item" href="#">Microsoft Rewards </a></li>
                        <li><a class="menu__item" href="#">免費下載與安全性</a></li>
                        <li><a class="menu__item" href="#">教育</a></li>
                        <li><a class="menu__item" href="#">禮品卡 </a></li>
                        <li><a class="menu__item" href="#">文件</a></li>
                        <li><a class="menu__item" href="#">Licensing</a></li>
                      </ul>
                    </li>
                    <li class="menu_bg"><a href="">檢視網站地圖
                      <span class="material-icons-outlined">chevron_right</span>
                    </a></li>
                  </ul>
                </div>
              </li>
              <li class="line">
                <a class="search font_style" href="">
                  <p>搜尋</p>
                  <span class="material-icons-outlined md-24">search</span></a>
              </li>
              <li class="line">
                <a class="shopping_cart font_style" href="">
                  <p>購物車</p>
                  <span class="material-icons-outlined md-24">shopping_cart</span></a>
              </li>
              <li class="line">
                <a class="login font_style" href="/">
                  <p>登入</p>
                  <img src="data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 64 64' stroke='%23707070'%3E%3Cg class='mectrl_stroke' stroke-width='1.9' fill='none'%3E%3Ccircle cx='32' cy='32' r='30.25'/%3E%3Cg transform='matrix(1.1 0 0 1.1 8.8 5.61)'%3E%3Ccircle class='mectrl_stroke' cx='20' cy='16' r='7'/%3E%3Cpath class='mectrl_stroke' d='M30 35h10m-5-5v10M30.833 32.09A11 11 0 009 34'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E" alt=""/></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <main>
      <div class="main">
        <div class="main_content container">
          <section class="hero_sec">
            <!-- Swiper -->
            <div class="swiper mySwiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide bg_dark">
                  <picture>
                    <source media="(min-width:1400px) and (max-width:1778px)" srcset="./img/1600.webp">
                    <source media="(min-width:1084px) and (max-width:1399px)" srcset="./img/1259.webp">
                    <source media="(min-width:768px) and (max-width:1083px)" srcset="./img/1083.webp">
                    <source media="(min-width:540px) and (max-width:767px)" srcset="./img/767.webp">
                    <source media="(max-width:539px)" srcset="./img/539.webp">
                    <img src="https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RWLAmj?ver=35aa&q=0&m=8&h=600&w=1600&b=%23FFFFFFFF&l=f&x=0&y=0&s=1898&d=712&aim=true" alt="">
                  </picture>
                  <div class="banner_content">
                    <strong class="badge">新上市</strong>
                    <h2>專為今天和明天的生活而設計</h2>
                    <p>新一代遊戲、 您的目標、 親朋好友。 Windows 11 是為了讓您更貼近所喜愛的一切。</p>
                    <div class="btn">
                      <a class="btnA" href="">查看您的電腦是否準備就緒<span class="material-icons-outlined">navigate_next</span></a>
                    </div>
                  </div>

                </div>
                <div class="swiper-slide bg_light">
                  <picture>
                    <source media="(min-width:1400px) and (max-width:1778px)" srcset="https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RWKHu9?ver=19af&q=0&m=8&h=600&w=1600&b=%23FFFFFFFF&l=f&x=0&y=224&s=3000&d=1125&aim=true">
                    <source media="(min-width:1084px) and (max-width:1399px)" srcset="https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RWKHu9?ver=19af&q=0&m=8&h=600&w=1600&b=%23FFFFFFFF&l=f&x=0&y=224&s=3000&d=1125&aim=true">
                    <source media="(min-width:768px) and (max-width:1083px)" srcset="https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RWKHu9?ver=19af&q=0&m=8&h=609&w=1083&b=%23FFFFFFFF&l=f&x=171&y=117&s=2639&d=1484&aim=true">
                    <source media="(min-width:540px) and (max-width:767px)" srcset="https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RWKHu9?ver=19af&q=0&m=8&h=431&w=767&b=%23FFFFFFFF&l=f&x=978&y=253&s=2022&d=1136&aim=true">
                    <source media="(max-width:539px)" srcset="https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RWKHu9?ver=19af&q=0&m=8&h=303&w=539&b=%23FFFFFFFF&l=f&x=1073&y=258&s=1924&d=1082&aim=true">
                    <img src="https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RWKHu9?ver=19af&q=0&m=8&h=600&w=1600&b=%23FFFFFFFF&l=f&x=0&y=224&s=3000&d=1125&aim=true" alt="">
                </picture>
                <div class="banner_content">
                  <strong class="badge">新上市</strong>
                  <h2 class="text_black">Surface Pro 8</h2>
                  <p class="text_black">運用更大的 13 吋觸控螢幕、更快的連線，以及提升的速度，成就更多。現在提供 Windows 11。</p>
                  <div class="btn">
                    <a class="btnB" href="">深入了解<span class="material-icons-outlined">navigate_next</span></a>

                  </div>
                </div>
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </section>

          <section class="main_meun m-container">
            <a class="main_meun_btn" href=""
              ><img
                src="https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RE4sQDc?ver=30c2&q=90&m=6&h=40&w=40&b=%23FFFFFFFF&l=f&o=t&aim=true"
                alt=""
              /><span>選擇您的<br />Microsoft 365</span></a
            >
            <a class="main_meun_btn" href=""
              ><img
                src="https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RE4pndL?ver=5217&q=90&m=6&h=40&w=40&b=%23FFFFFFFF&l=f&o=t&aim=true"
                alt=""
              /><span>選購 Surface 裝置</span></a
            >
            <a class="main_meun_btn" href=""
              ><img
                src="https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RE4sQDc?ver=30c2&q=90&m=6&h=40&w=40&b=%23FFFFFFFF&l=f&o=t&aim=true"
                alt=""
              /><span>取得 Windows 11</span></a
            >
          </section>
          <!-- 上方4張卡片 -->
          <section class="card_wrapper">
            <div class="two_card m-container">
              <div class="card">
                <img
                  src="https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RWPGs4?ver=3a6f&q=90&m=6&h=201&w=358&b=%23FFFFFFFF&l=f&o=t&aim=true"
                  alt=""
                />
                <div class="text m-t-38">
                  <h3 class="title f3">Microsoft 365</h3>
                  <p class="paragraph">
                    進階版 Office
                    應用程式、額外的雲端儲存空間、進階安全性等功能，全都在一個方便的訂閱中。
                  </p>
                  <a class="text_link" href=""
                    ><span>最多可供 6 人使用</span
                    ><span class="material-icons-outlined">
                      navigate_next
                    </span></a
                  >
                </div>
              </div>
              <div class="card">
                <img
                  src="https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RE4FTtq?ver=dae2&q=90&m=6&h=201&w=358&b=%23FFFFFFFF&l=f&o=t&aim=true"
                  alt=""
                />
                <div class="text m-t-38">
                  <h3 class="title f3">Surface Laptop Go</h3>
                  <p class="paragraph">
                    運用時尚和效能兼具、最輕巧的 Surface
                    筆記型電腦，善加利用每一天。
                  </p>
                  <a class="text_link" href=""
                    ><span>立即選購</span
                    ><span class="material-icons-outlined">
                      navigate_next
                    </span></a
                  >
                </div>
              </div>
            </div>
            <div class="two_card m-container">
              <div class="card">
                <img
                  src="https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RWKAPX?ver=033f&q=90&m=6&h=201&w=358&b=%23FFFFFFFF&l=f&o=t&aim=true"
                  alt=""
                />
                <div class="text">
                  <strong class="badge">查看更新的內容</strong>
                  <h3 class="title f3">Surface Pro X</h3>
                  <p class="paragraph">
                    隨時隨地以任何角度不間斷工作，而且配備了可拆式鍵盤與內建的
                    Slim Pen 存放空間和充電功能。 現在搭載 Windows 11。
                  </p>
                  <a class="text_link" href=""
                    ><span>立即選購</span
                    ><span class="material-icons-outlined">
                      navigate_next
                    </span></a
                  >
                </div>
              </div>
              <div class="card">
                <img
                  src="https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RE4P80m?ver=316d&q=90&m=6&h=201&w=358&b=%23FFFFFFFF&l=f&o=t&x=1157&y=247&aim=true"
                  alt=""
                />
                <div class="text m-t-38">
                  <h3 class="title f3">Xbox Game Pass Ultimate</h3>
                  <p class="paragraph">
                    首月會員資格只要 NT$30。 在您擁有的裝置上遊玩。 包含 EA
                    Play。 此優惠僅適用於新訂閱者。
                  </p>
                  <a class="text_link" href=""
                    ><span>立即選購</span
                    ><span class="material-icons-outlined">
                      navigate_next
                    </span></a
                  >
                </div>
              </div>
            </div>
          </section>

          <!-- 中間 Banner -->
          <section class="banner_bottom bg_light">
            <picture>
              <source media="(min-width:1400px) and (max-width:1778px)" srcset="https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RE3hFDE?ver=e113&q=0&m=8&h=600&w=1600&b=%23FFFFFFFF&l=f&x=0&y=180&s=2120&d=795&aim=true">
              <source media="(min-width:1084px) and (max-width:1399px)" srcset="https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RE3hFDE?ver=e113&q=0&m=8&h=600&w=1600&b=%23FFFFFFFF&l=f&x=0&y=180&s=2120&d=795&aim=true">
              <source media="(min-width:768px) and (max-width:1083px)" srcset="https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RE3hFDE?ver=e113&q=0&m=8&h=609&w=1083&b=%23FFFFFFFF&l=f&x=4&y=0&s=2116&d=1190&aim=true">
              <source media="(min-width:540px) and (max-width:767px)" srcset="https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RE3hFDE?ver=e113&q=0&m=8&h=431&w=767&b=%23FFFFFFFF&l=f&x=494&y=172&s=1626&d=914&aim=true">
              <source media="(max-width:539px)" srcset="https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RE3hFDE?ver=e113&q=0&m=8&h=303&w=539&b=%23FFFFFFFF&l=f&x=504&y=148&s=1616&d=908&aim=true">
              <img src="https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RE3hFDE?ver=e113&q=0&m=8&h=431&w=767&b=%23FFFFFFFF&l=f&x=494&y=172&s=1626&d=914&aim=true" alt=""/>
            </picture>
            <div class="banner_content">
              <h2>Microsoft OneDrive</h2>
              <p>將檔案和相片儲存到 OneDrive，即可隨時隨地從任何裝置存取</p>
              <div class="btn">
                <a class="btnB" href="">深入瞭解<span class="material-icons-outlined">navigate_next</span></a>
              </div>
            </div>
          </section>

          <!-- 下方4張卡片 -->
          <section>
            <div class="card_title m-container">
              <h3>適用於商務</h3>
            </div>
            <div class="card_wrapper">
              <div class="two_card m-container">
                <div class="card">
                  <img
                    src="https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RE4HCqV?ver=5c59&q=90&m=6&h=201&w=358&b=%23FFFFFFFF&l=f&o=t&aim=true"
                    alt=""
                  />
                  <div class="text m-t-38">
                    <h3 class="title f3">適用於商務的 Surface</h3>
                    <p class="paragraph">
                      無論從事哪種工作，都有一款有助於成功的 Surface。
                    </p>
                    <a class="text_link" href=""
                      ><span>立即選購</span
                      ><span class="material-icons-outlined">
                        navigate_next
                      </span></a
                    >
                  </div>
                </div>
                <div class="card">
                  <img
                    src="https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RWLJ3u?ver=7dcf&q=90&m=6&h=201&w=358&b=%23FFFFFFFF&l=f&o=t&x=755&y=404&aim=true"
                    alt=""
                  />
                  <div class="text m-t-38">
                    <h3 class="title f3">免費取得 Microsoft Teams</h3>
                    <p class="paragraph">
                      線上會議、聊天和共用雲端儲存空間，盡在一處。
                    </p>
                    <a class="text_link" href=""
                      ><span>免費註冊</span
                      ><span class="material-icons-outlined">
                        navigate_next
                      </span></a
                    >
                  </div>
                </div>
              </div>
              <div class="two_card m-container">
                <div class="card">
                  <img
                    src="https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RWURKU?ver=f584&q=90&m=6&h=201&w=358&b=%23FFFFFFFF&l=f&o=t&aim=true"
                    alt=""
                  />
                  <div class="text m-t-38">
                    <h3 class="title f3">在混合式環境中蓬勃發展</h3>
                    <p class="paragraph">
                      探索工具、資源和策略，協助您的員工在靈活辦公的新環境中取得成功。
                    </p>
                    <a class="text_link" href=""
                      ><span>深入了解</span
                      ><span class="material-icons-outlined">
                        navigate_next
                      </span></a
                    >
                  </div>
                </div>
                <div class="card">
                  <img
                    src="https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RWMGbF?ver=ecec&q=90&m=6&h=201&w=358&b=%23FFFFFFFF&l=f&o=t&aim=true"
                    alt=""
                  />
                  <div class="text m-t-38">
                    <h3 class="title f3">商務用 Windows 11 登場</h3>
                    <p class="paragraph">
                      專為混合式辦公而設計。 為員工帶來實用性。 為 IT 帶來一致性。 為所有人帶來安全性。
                    </p>
                    <a class="text_link" href=""
                      ><span>深入了解</span
                      ><span class="material-icons-outlined">
                        navigate_next
                      </span></a
                    >
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- social media link -->
          <section class="bottom m-container">
          <div class="social_media">
            <span>關注 Microsoft</span>
            <a href="https://www.facebook.com/MicrosoftTaiwan/" class="facebook_btn">
              <img src="https://www.microsoft.com/onerfstatics/marketingsites-eas-prod/_h/2532198d/coreui.statics/images/social/facebook.svg" alt="">
            </a>
            <a href="https://www.youtube.com/user/MicrosoftTaiwan" class="youtube_btn">
              <img src="https://www.microsoft.com/onerfstatics/marketingsites-eas-prod/_h/2d505657/coreui.statics/images/social/youtube.svg" alt="">
            </a>
          </section>
        </div>
        </div>
      </div>
    </main>
    <!-- footer -->
    <footer>
      <div class="footer">
        <!-- footer sitemap -->
        <nav class="sitemap_wrapper container m-container">
          <div class="sitemap_left">
          <div class="sitemap">
            <ul>
              <h4 class="sitemap_heading">最新動向</h4>
              <li><a href="#">Microsoft 365</a></li>
              <li><a href="#">Surface Go</a></li>
              <li><a href="#">Surface Book 2</a></li>
              <li><a href="#">Surface Pro</a></li>
              <li><a href="#">Windows 11 應用程式</a></li>
            </ul>
          </div>
          <div class="sitemap">
            <ul>
              <h4 class="sitemap_heading">Microsoft Store</h4>
              <li><a href="#">帳戶設定檔</a></li>
              <li><a href="#">下載中心</a></li>
              <li><a href="#">退貨/退款</a></li>
              <li><a href="#">訂單追蹤</a></li>
              <li><a href="#">Windows 11 應用程式</a></li>
            </ul>
          </div>
          <div class="sitemap">
            <ul>
              <h4 class="sitemap_heading">教育</h4>
              <li><a href="#">Microsoft 在教育領域的應用</a></li>
              <li><a href="#">學生適用的 Office</a></li>
              <li><a href="#">學校適用的 Office 365</a></li>
              <li><a href="#">Microsoft Azure 在教育領域的應用</a></li>
            </ul>
          </div>
        </div>
        <div class="sitemap_right">
          <div class="sitemap">
            <ul>
              <h4 class="sitemap_heading">企業</h4>
              <li><a href="#">Azure</a></li>
              <li><a href="#">AppSource</a></li>
              <li><a href="#">汽車</a></li>
              <li><a href="#">政府機構</a></li>
              <li><a href="#">醫療保健</a></li>
              <li><a href="#">製造</a></li>
              <li><a href="#">金融服務</a></li>
              <li><a href="#">零售</a></li>
            </ul>
          </div>
          <div class="sitemap">
            <ul>
              <h4 class="sitemap_heading">開發人員</h4>
              <li><a href="#">Microsoft Visual Studio</a></li>
              <li><a href="#">Windows 開發人員中心</a></li>
              <li><a href="#">開發人員中心</a></li>
              <li><a href="#">Microsoft 開發人員計畫</a></li>
              <li><a href="#">Channel 9</a></li>
              <li><a href="#">Microsoft 365 開發人員中心</a></li>
              <li><a href="#">Microsoft 365 開發人員計畫</a></li>
            </ul>
          </div>
          <div class="sitemap">
            <ul>
              <h4 class="sitemap_heading">公司</h4>
              <li><a href="#">人才招募</a></li>
              <li><a href="#">公司新聞</a></li>
              <li><a href="#">Microsoft 隱私權</a></li>
              <li><a href="#">投資者</a></li>
              <li><a href="#">安全性</a></li>
            </ul>
          </div>
        </div>
        </nav>
        <!-- footer base -->
        <div class="base_footer">
          <div class="locale-picker-link"></div>
          <div class="list_bare">
            <ul>
              <li><a href="#"></a>連絡 Microsoft</li>
              <li><a href="#"></a>隱私權</li>
              <li><a href="#"></a>使用規定</li>
              <li><a href="#"></a>商標</li>
              <li><a href="#"></a>有關我們的廣告訊息</li>
              <li>© Microsoft 2022</li>

            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        pagination: {
          el: ".swiper-pagination",
          dynamicBullets: true,
        },
      });
    </script>
  </body>
</html>
