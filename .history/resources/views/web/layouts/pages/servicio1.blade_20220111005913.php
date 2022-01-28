@extends('web.layouts.base')
<!-- Titulo de la página -->
@section('title_page')
<title>Template en Desarrollo</title>
@endsection

<!-- Contenido en el Head de la pagina -->
@section('head_page')
<!-- extras -->
@endsection

<!-- Contenido en el Body -->
@section('content')

<main class="main-content">
    <?php  
        $footer_ = DB::table('home_footer')->where('id_footer', '=',1)->get();
    ?>

    <!--== Start Page Title Area ==-->
    <section class="page-title-area bg-img" data-bg-img="/template_web/assets/img/photos/bg-page2.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title-content content-style2">
                        <h2 class="title"><span>Osteopatía </h2>
                        <div class="desc">
                            <p>Nuestros especialistas estan enfocados al 100% al rendimiento físico y mental.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== End Page Title Area ==-->

    <!--== Start Blog Area Wrapper ==-->
    <section class="blog-details-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="post-details-content">
                        <div class="post-details-body">
                            <div class="thumb">
                                <img class="w-100" src="template_web/assets/img/blog/b1.jpg" alt="Image" />
                            </div>
                            <div class="content">
                                <div class="meta">
                                    <a class="category" href="#/"><i
                                            class="fa fa-tags icon"></i><span>FITNESS</span></a>
                                    <a class="post-date" href="#/"><i class="fa fa-calendar icon"></i><span>05 MAY,
                                            2021</span></a>
                                </div>
                                <h4 class="title">PERFECT WORKOUT IS THE WAY TO SHAPE YOUR BODY AND MIND FOR FITNESS
                                </h4>
                                <p>Gym is very important to maintain our health luptas sit fugit, sed quia cuuntur magni
                                    dolores eos
                                    qui rat ione volupta pleasure rationally encounter consequences that are extremely
                                    pleasure
                                    rationally encounter that are extremely painful. Nor again is there anyone who loves
                                    or pursues or
                                    desires to obtain pain of itself, because it is pain, but because occasionally
                                    circumstances occur
                                    in which some great pleasure s very important to a maintain our health luptas sit
                                    fugit, sed quia
                                    cuuntur magni dolores eos qui ione volupta pleasure rationally encounter
                                    consequences that are
                                    extremely pleasure rationally encounter </p>


                                <div class="blockquote-area">
                                    <blockquote class="blockquote-style bg-img" data-bg-img="template_web/assets/img/blog/bg1.jpg">
                                        <p>Gym is very important to maintain our health luptas sit fugit, sed quia
                                            cuuntur magni volupta
                                            pleasure rationally encounter consequences that are extremely pleasure somee
                                            extremely
                                            painful. Nor again is there anyone who loves or pursues or desires</p>
                                        <div class="icon">
                                            <img src="template_web/assets/img/icons/right-quote.png" alt="Icon">
                                        </div>
                                    </blockquote>
                                </div>

                                <h2 class="title">Si te interesa este servicio contacta con nosotros ahora</h2>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group m-0">
                                            <button class="btn btn-theme" type="submit">POST COMMENT</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== End Blog Area Wrapper ==-->


</main>

@endsection

@section('footer_page')
<!--//=======Extra=======//-->

<script type="text/javascript">
$('#sendFormServicios').on('submit', function(e) {
    e.preventDefault();
    let formData = new FormData(this);
    axios.post('enviar_email_informacion',
        formData, {
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        }
    ).then(function(response) {
        $('.form-message').html(response.data.data);
        $('form :input').val('');
        $('form :textarea').val('');
    }).catch(function() {
        console.log('FAILURE!!');
    });

});
</script>

@endsection