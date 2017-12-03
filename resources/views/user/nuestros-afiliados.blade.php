@include('user.header') 
    
        <div id="content" role="main">
            <div class="page-header dark larger larger-desc no-margin" style="background: #009688; border: none;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>{{$nuestros_afiliados->titulo_nuestros_afiliados}}</h1>
                            <p class="page-header-desc">{{$nuestros_afiliados->descripcion_nuestros_afiliados}}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb40"></div>

            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div id="mapAfiliados"></div>
                    </div>
                    <div class="col-md-3">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-condensed">
                                <thead>
                                    <tr>
                                        <th class="text-center" colspan="2">Afiliados</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($nuestros_afiliados1s as $nuestros_afiliados1)
                                        <tr>
                                            <td class="text-center">{{$nuestros_afiliados1->afiliado_nuestros_afiliados}}</td>
                                            <td class="text-center">{{$nuestros_afiliados1->cantidad_nuestros_afiliados}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

@include('user.footer')

<script type="text/javascript">
    $(".editar").click(function(){
        $("#documento_pdf").attr("src", "{{url('uploads')}}/"+$(this).data("pdf"));
    });
</script>

