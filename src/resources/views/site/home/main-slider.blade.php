<!--Main Slider-->
<section class="main-slider">
    <div class="slider_wave"></div>
    <div class="rev_slider_wrapper fullwidthbanner-container" id="rev_slider_one_wrapper" data-source="gallery">
        <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
            <ul>
                @foreach($listaBanner as $banner)
<!-- SLIDE DINÂMICO -->
<li data-index="rs-{{ $banner->id_banner }}" 
    data-transition="slideleft" 
    data-slotamount="default" 
    data-hideafterloop="0" 
    data-hideslideonmobile="off" 
    data-easein="default" 
    data-easeout="default" 
    data-masterspeed="850" 
    data-rotate="0" 
    data-saveperformance="off" 
    data-title="{{ $banner->titulo_banner }}">
    
    <!-- IMAGEM DE FUNDO (Ajustada para 'foto_banner') -->
    <img src="{{ asset('davilla/images/' . $banner->foto_banner) }}" 
         alt="{{ $banner->titulo_banner }}" 
         title="{{ $banner->titulo_banner }}" 
         data-bgposition="center center" 
         data-bgfit="cover" 
         data-bgrepeat="no-repeat" 
         class="rev-slidebg" 
         data-no-retina>
    
    <!-- OVERLAY ESCURO -->
    <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme" 
        id="overlay-{{ $banner->id_banner }}" 
        data-x="center" data-y="center" 
        data-width="['full','full','full','full']"
        data-height="['full','full','full','full']"
        data-type="shape" 
        data-basealign="slide" 
        data-responsive_offset="on" 
        data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"}]'
        style="z-index: 5; background-color:rgba(0, 0, 0, 0.2);"></div>

    <!-- TÍTULO DINÂMICO (Ajustado para 'titulo_banner') -->
    <div class="tp-caption tp-resizeme" 
        id="title-{{ $banner->id_banner }}" 
        data-x="center" data-y="center" data-voffset="-40" 
        data-width="['800','700','600','400']"
        data-type="text" 
        data-responsive_offset="on" 
        data-frames='[{"delay":500,"speed":1000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power2.easeInOut"}]'
        data-textAlign="['center','center','center','center']"
        style="z-index: 8; white-space: normal; font-size: 60px; line-height: 70px; color: #ffffff; font-family:'Leckerli One', cursive; text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">
        {{ $banner->titulo_banner }}
    </div>

    <!-- SUBTÍTULO (Ajustado para 'subtitulo_banner') -->
    @if($banner->subtitulo_banner)
    <div class="tp-caption tp-resizeme" 
        id="subtitle-{{ $banner->id_banner }}" 
        data-x="center" data-y="center" data-voffset="40" 
        data-width="['800','700','600','400']"
        data-type="text" 
        data-responsive_offset="on" 
        data-frames='[{"delay":800,"speed":1000,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power2.easeInOut"}]'
        data-textAlign="['center','center','center','center']"
        style="z-index: 7; white-space: normal; font-size: 20px; line-height: 30px; color: #ffffff; font-family:'ABeeZee', sans-serif;">
        {{ $banner->subtitulo_banner }}
    </div>
    @endif

    <!-- BOTÃO (Ajustado para 'texto_botao_banner' e 'link_botao_banner') -->
     <!-- BOTÃO (Ajustado para ser clicável) -->
@if($banner->texto_botao_banner)
<div class="tp-caption tp-resizeme" 
    id="btn-wrapper-{{ $banner->id_banner }}" 
    data-x="center" 
    data-y="center" 
    data-voffset="120" 
    data-width="none" 
    data-height="none" 
    data-whitespace="nowrap"
    data-type="text" 
    data-responsive_offset="on" 
    data-frames='[{"delay":1000,"speed":1000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
    style="z-index: 20; pointer-events: auto;">
    
    <a href="{{ $banner->link_botao_banner }}" 
       class="theme-btn btn-style-one" 
       style="text-decoration: none; position: relative; z-index: 999; cursor: pointer;">
        {{ $banner->texto_botao_banner }}
    </a>
</div>
@endif
</li>
@endforeach
            </ul>
        </div>
    </div>
</section>