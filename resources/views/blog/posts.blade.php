@extends('layouts.homepage')

@section('title', 'Заметки')

@section('developer')
<div class="jumbotron">
    <!-- TODO: перед именем можно добавить миниатюрное фото в круглой рамке -->
    <img src="{{ asset('/img/avatar.jpg') }}" alt="Я" class="hidden-xs img-circle avatar">
    <h1>Григорий Мовча́н</h1>
    <p>Back-end разработчик.</p>
    <!--
    <p>
        <a class="btn btn-primary" href="../../components/#navbar" role="button">View navbar docs &raquo;</a>
    </p>
    -->
    <!-- TODO: Значек телеграма меньше на 2 пикселя чем надо, выбивается 
    из ансамбля. Лучше чтобы все значки были одного цвета, например 
    - черные. -->
    <ul class="soc-network-list">
        <li class="soc-network-icon github-icon" title="Github"><a href="#"></a></li>
        <li class="soc-network-icon telegram-icon" title="Telegram"><a href="#"></a></li>
        <li class="soc-network-icon mail-icon" title="E-mail"><a href="#"></a></li>
        <li class="soc-network-icon vk-icon" title="Vkontakte"><a href="#"></a></li>
    </ul>
</div>
@endsection

@section('content')

@if (Auth::check())
    <p><a class="btn btn-info" href="/blog/post/add" role="button">Добавить пост</a></p>
@endif

<div class="row">
    <div class="col-sm-12 blog-main">
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#blog-posts" aria-controls="blog-posts" role="tab" data-toggle="tab" id="blog-posts-tab">Заметки</a></li>
            <li role="presentation"><a href="#blog-tags" aria-controls="blog-tags" role="tab" data-toggle="tab" id="blog-posts-tab">Теги</a></li>
        </ul>
    </div>               
</div>

<div class="row">
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="blog-posts">
            <div class="col-sm-12 blog-main">

                <div class="blog-post">
                    <h2 class="blog-post-title">Мир как воля и представление</h2>
                    <p class="blog-post-meta">1 декабря, 1818 by <a href="#">Шопенгауэр</a></p>
                    <p>
                        Ценность этой работы широко дискутируется. Некоторые оценивают Шопенгауэра как одного из наиболее оригинальных и вдохновляющих философов, в то время как другие находят его непоследовательным и слишком пессимистичным.[4] Шопенгауэр оказал огромное влияние на психоанализ и работы Фрейда[5]. Некоторые исследователи даже сомневаются в утверждении Фрейда, что он не читал Шопенгауэра до своей старости. В понятии подсознания присутствует «воля» Шопенгауэра, и теория безумия согласуется с этим. Рассуждения Шопенгауэра о языке и этике оказали огромное влияние на Людвига Витгенштейна[6]. Некоторые[7] рассматривают значение Воли как близкую к классическим примерам монизма.
                    </p>
                    <a class="btn btn-default" href="#" role="button">Читать дальше <i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                    <a title="Комментировать" class="btn btn-default" href="#" role="button"><i class="fa fa-comments fa-1x" aria-hidden="true"></i> (0)</a>
                </div><!-- /.blog-post -->

                <div class="blog-post">
                    <h2 class="blog-post-title">О различии возрастов</h2>
                    <p class="blog-post-meta">10 декабря, 1841 by <a href="#">Шопенгауэр</a></p>
                    <p>
                        К концу этого эвдемонологического очерка уместно будет кинуть взгляд на те изменения, какие производит с нами возраст.
                    </p>
                    <p>
                        В течение всей нашей жизни мы обладаем только настоящими ничего более. Вся разница сводится к тому, что в начале жизни длинное будущее впереди нас, к концу же ее -- длинное прошедшее позади; сверх этого наш темперамент, но отнюдь не характер, подвергается известным изменениям, благодаря чему каждый раз сообщается настоящему различный оттенок. 
                    </p>
                    <a class="btn btn-default" href="#" role="button">Читать дальше <i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                    <a title="Комментировать" class="btn btn-default" href="#" role="button"><i class="fa fa-comments fa-1x" aria-hidden="true"></i> (0)</a>
                </div><!-- /.blog-post -->

                <div class="blog-post">
                    <h2 class="blog-post-title">Sample blog post</h2>
                    <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>

                    <p>This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>
                    <hr>
                    <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
                    <blockquote>
                        <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </blockquote>
                    <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                    <h2>Heading</h2>
                    <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                    <h3>Sub-heading</h3>
                    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                    <pre><code>Example code block</code></pre>
                    <p>Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
                    <h3>Sub-heading</h3>
                    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                    <ul>
                        <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
                        <li>Donec id elit non mi porta gravida at eget metus.</li>
                        <li>Nulla vitae elit libero, a pharetra augue.</li>
                    </ul>
                    <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
                    <ol>
                        <li>Vestibulum id ligula porta felis euismod semper.</li>
                        <li>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</li>
                        <li>Maecenas sed diam eget risus varius blandit sit amet non magna.</li>
                    </ol>
                    <p>Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur est at lobortis.</p>
                </div><!-- /.blog-post -->

                <div class="blog-post">
                    <h2 class="blog-post-title">Another blog post</h2>
                    <p class="blog-post-meta">December 23, 2013 by <a href="#">Jacob</a></p>

                    <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
                    <blockquote>
                        <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </blockquote>
                    <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                    <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                </div><!-- /.blog-post -->

                <div class="blog-post">
                    <h2 class="blog-post-title">New feature</h2>
                    <p class="blog-post-meta">December 14, 2013 by <a href="#">Chris</a></p>

                    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                    <ul>
                        <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
                        <li>Donec id elit non mi porta gravida at eget metus.</li>
                        <li>Nulla vitae elit libero, a pharetra augue.</li>
                    </ul>
                    <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                    <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
                </div><!-- /.blog-post -->

                <nav class="text-center">
                    <!--
                    <ul class="pager">
                        <li><a href="#" title='Первая'><i class="fa fa-chevron-left" aria-hidden="true"></i><i class="fa fa-chevron-left" aria-hidden="true"></i></a></li>
                        <li><a href="#" title='Предыдущая'><i class="fa fa-chevron-left" aria-hidden="true"></i></a></li>
                        <li><a href="#" title='Следующая'>1</i></a></li>
                        <li><a href="#" title='Следующая'>2</i></a></li>
                        <li><a href="#" title='Следующая'>3</i></a></li>
                        <li><a href="#" title='Следующая'>...</i></a></li>
                        <li><a href="#" title='Следующая'>5</i></a></li>
                        <li><a href="#" title='Следующая'><i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
                        <li><a href="#" title='Последняя'><i class="fa fa-chevron-right" aria-hidden="true"></i><i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
                    </ul>
                    -->
                    
                    <ul class="pagination">
                        <li class="disabled"><a href="#">«</a></li>
                        <li class="disabled"><a href="#">‹</a></li>
                        <li class="active hidden-xs"><a href="#">1</a></li>
                        <li class="hidden-xs"><a href="#">2</a></li>
                        <li class="hidden-xs"><a href="#">3</a></li>
                        <li class="hidden-xs"><a href="#">4</a></li>
                        <li class="hidden-xs"><a href="#">5</a></li>
                        <li><a href="#">›</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                </nav>

            </div><!-- /.blog-main -->
        </div>
        <div role="tabpanel" class="tab-pane" id="blog-tags">
            <div class="col-sm-12 blog-sidebar">
                <div class="sidebar-module">
                    <p>
                        <a href="#">тег (0)</a><span>, </span><a href="#">рыбы (10)</a><span>, </span><a href="#">кошки (8)</a><span>, </span><a href="#">собаки (77)</a><span>, </span><a href="#">дикобразы (0)</a><span>, </span><a href="#">еноты (1)</a><span>, </span><a href="#">птицы (4)</a><span>, </span><a href="#">тег (0)</a><span>, </span><a href="#">свиньи (0)</a><span>, </span><a href="#">овцы (7)</a><span>, </span><a href="#">мыши (1)</a><span>, </span><a href="#">бегемоты (2)</a><span>, </span><a href="#">рептилоиды (8)</a><span>, </span><a href="#">пчёлы (8)</a><span>, </span><a href="#">кони (5)</a><span>, </span>
                    </p>
                </div>
                <!--
                <div class="sidebar-module">
                    <h4>Archives</h4>
                    <ol class="list-unstyled">
                        <li><a href="#">March 2014</a></li>
                        <li><a href="#">February 2014</a></li>
                        <li><a href="#">January 2014</a></li>
                        <li><a href="#">December 2013</a></li>
                        <li><a href="#">November 2013</a></li>
                        <li><a href="#">October 2013</a></li>
                        <li><a href="#">September 2013</a></li>
                        <li><a href="#">August 2013</a></li>
                        <li><a href="#">July 2013</a></li>
                        <li><a href="#">June 2013</a></li>
                        <li><a href="#">May 2013</a></li>
                        <li><a href="#">April 2013</a></li>
                    </ol>
                </div>
                <div class="sidebar-module">
                    <h4>Elsewhere</h4>
                    <ol class="list-unstyled">
                        <li><a href="#">GitHub</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Facebook</a></li>
                    </ol>
                </div>
                -->
            </div><!-- /.blog-sidebar -->
        </div>
    </div><!-- /.tab-content -->
</div><!-- /.row -->
@endsection