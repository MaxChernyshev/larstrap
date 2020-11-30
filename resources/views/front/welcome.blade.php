@extends('front.layouts.layout')
@section('header')
@endsection

@section('content')
    <div class="welcome_page">

        <div class="container-fluid container_0">
            <div class="row">
                <div class="col-12 m-0 p-0">
                    <img src="{{asset('assets/front/img/bg-img.jpg')}}" alt="">
                </div>
            </div>
        </div>

        <div class="container container_1 mt-5 container_block mx-auto">
            <div class="row m-0 p-0 ">
                <div class="col-12">
                    <h2 class="homestate hometitle d-flex justify-content-center">НОВИНИ КОМПАНІЇ</h2>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 p-4">
                    <div class="card">
                        <img src="{{asset('assets/front/img/news-img1.jpg')}}" alt="" class="homestateimg">
                        <div class="card-body">
                            <h5 class="card-title">
                                Агріко Груп - Ваш надійний постачальник
                            </h5>
                            <p class="card-text">
                                Маючи налагодженні стосутки з провідними європейськими постачальниками, ми пропонуємо
                                Вам: Широкий спектр запасних частинЯкісні запасні частини Своєчасну доставку
                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 p-4">
                    <div class="card">
                        <img src="{{asset('assets/front/img/news-img2.jpg')}}" alt="" class="homestateimg">
                        <div class="card-body">
                            <h5 class="card-title">
                                Оригінальні запасні частини та їх замінники
                            </h5>
                            <p class="card-text">
                                Маючи налагодженні стосутки з провідними європейськими постачальниками, ми пропонуємо
                                Вам: Широкий спектр запасних частинЯкісні запасні частини Своєчасну доставку
                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 p-4">
                    <div class="card">
                        <img src="{{asset('assets/front/img/news-img3.jpg')}}" alt="" class="homestateimg">
                        <div class="card-body">
                            <h5 class="card-title">
                                Системний та Комплексний підхід
                            </h5>
                            <p class="card-text">
                                Маючи налагодженні стосутки з провідними європейськими постачальниками, ми пропонуємо
                                Вам: Широкий спектр запасних частинЯкісні запасні частини Своєчасну доставку
                            </p>
                        </div>
                    </div>
                </div>


            </div>
        </div>


        <div class="container container_2 mt-5 container_block mx-auto">
            <div class="row  m-0 p-0">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12  m-0 p-0">
                    <h2 class="homestate hometitle d-flex justify-content-center">КАТАЛОГ ЗАПЧАСТИН</h2>
                </div>
            </div>
            <div class="row trade_marks">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 d-flex justify-content-center  mt-3">
                    <div class="img_wrapper d-flex justify-content-center">
                        <img src="{{asset('assets/front/img/claas.png')}}" alt="" class="img-fluid my-auto">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 d-flex justify-content-center  mt-3">
                    <div class="img_wrapper d-flex justify-content-center">
                        <img src="{{asset('assets/front/img/akpil.png')}}" alt="" class="img-fluid my-auto">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 d-flex justify-content-center  mt-3">
                    <div class="img_wrapper d-flex justify-content-center">
                        <img src="{{asset('assets/front/img/dana.png')}}" alt="" class="img-fluid my-auto">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 d-flex justify-content-center  mt-3">
                    <div class="img_wrapper d-flex justify-content-center">
                        <img src="{{asset('assets/front/img/spicer.png')}}" alt="" class="img-fluid my-auto">

                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-center last_images"
                     id="last_images">
                    <div class="last_img_wrapper d-flex justify-content-center mt-3">
                        <img src="{{asset('assets/front/img/carraro.png')}}" alt="Запчастини виробника Carraro"
                             class="align-items-center my-auto">
                        <img src="{{asset('assets/front/img/amazone.png')}}" alt="Запчастини виробника Amazone"
                             class="align-items-center my-auto">
                        <img src="{{asset('assets/front/img/horsch.png')}}" alt="Запчастини виробника Horsch"
                             class="align-items-center my-auto">
                        <img src="{{asset('assets/front/img/vaderstad.png')}}" alt="Запчастини виробника  Vaderstad"
                             class="align-items-center my-auto">
                        <img src="{{asset('assets/front/img/kuhn.png')}}" alt="Запчастини виробника Kuhn"
                             class="align-items-center my-auto">
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid container_3 mt-5 mx-auto"
             style="background: url({{asset('assets/front/img/bg-advantages.jpg')}}) 0 0 no-repeat; ">

            <div class="row row_advantages mx-auto mt-5">
                <div class="col-12 d-flex justify-content-center mt-5">
                    <h2>КАТАЛОГ ЗАПЧАСТИН</h2>
                </div>
            </div>

            <div class="row row_advantages mx-auto mt-5">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 p-4">
                    <div class="card">
                        <div class="advantages_block_circle d-flex align-items-center">
                            <img src="{{asset('assets/front/img/advantages-img1.png')}}" alt="" class="mx-auto d-block">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title d-flex justify-content-center">
                                Гарантія якості
                            </h5>
                            <p class="card-text d-flex justify-content-center">
                                "Агріко - груп" працює лише з виробниками та міжнародними всесвітньовідомими
                                постачальниками!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 p-4">
                    <div class="card">
                        <div class="advantages_block_circle d-flex align-items-center">
                            <img src="{{asset('assets/front/img/advantages-img2.png')}}" alt="" class="mx-auto d-block">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title d-flex justify-content-center">
                                Величезний асортимент
                            </h5>
                            <p class="card-text d-flex justify-content-center">
                                "Агріко - груп" доставимо все що потрібно Вашій техніці!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 p-4">
                    <div class="card">
                        <div class="advantages_block_circle d-flex align-items-center">
                            <img src="{{asset('assets/front/img/advantages-img3.png')}}" alt=""
                                 class="mx-auto d-block">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title d-flex justify-content-center">
                                Оперативна доставка
                            </h5>
                            <p class="card-text d-flex justify-content-center">
                                "Агріко - груп" тільки якісний товар в найкоротші терміни! Вам сподобається з нами
                                працювати!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>


@endsection
@section('footer')

@endsection

