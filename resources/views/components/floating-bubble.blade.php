<div>
    <div id="whatsapp">
        <a href="" class="wtsapp" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="fa fa-whatsapp"></i>
        </a>
    </div>

    <style type="text/css">
        #whatsapp .wtsapp {
            position: fixed;
            transform: all .5s ease;
            background-color: #25D366;
            display: block;
            text-align: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
            border-radius: 50px;
            border-right: none;
            color: #fff;
            font-weight: 700;
            font-size: 30px;
            bottom: 90px;
            right: 20px;
            border: 0;
            z-index: 9999;
            width: 50px;
            height: 50px;
            line-height: 50px;
        }

        #whatsapp .wtsapp:before {
            content: "";
            position: absolute;
            z-index: -1;
            left: 50%;
            top: 50%;
            transform: translateX(-50%) translateY(-50%);
            display: block;
            width: 60px;
            height: 60px;
            background-color: #25D366;
            border-radius: 50%;
            -webkit-animation: pulse-border 1500ms ease-out infinite;
            animation: pulse-border 1500ms ease-out infinite;
        }

        #whatsapp .wtsapp:focus {
            border: none;
            outline: none;
        }

        @keyframes pulse-border {
            0% {
                transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1);
                opacity: 1;
            }

            100% {
                transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1.5);
                opacity: 0;
            }
        }
    </style>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    
                    <div class="row" style="background: #00b147; padding: 10px 25px; color: #fff;">
                        <div class="col-md-2">
                            <span style="color: #fff; padding: 5px 15px; font-size: 50px;">
                                <i class="fa fa-whatsapp"></i>
                            </span>
                        </div>
                        <div class="col-md-10">
                                    <b style="font-size: 20px;">Necesitas ayuda?</b> <br>
                                    ¡Hola! Haga clic en el Whatsapp y chatee.
                        </div>
                    </div>
                    <a href="https://api.whatsapp.com/send?phone=51977662460&text=Hola&nbsp;CapPeru!&nbsp;me&nbsp;pueden&nbsp;ayudar?"
                        target="_blank" class="animate__animated animate__fadeInUp" style="width: 100%;">
                        <div class="row"
                            style="padding: 10px 15px;
                                                border-left: 5px solid #25D366; 
                                                background: #f8f8f8;
                                                box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);">
                            <div class="col-md-1" style="display: flex; align-items: center;">
                                <img style="100%;" src="{{ asset('themes/capperu/assets/img/redes/whatsapp.png') }}">
                            </div>
                            <div class="col-md-9" style="margin-top: 5px;">
                                <p style="font-size: 20px; display: flex; align-items: center;">Asesora 1</p>
                            </div>
                            <div class="col-md-2" style="display: flex; align-items: center;">
                                <span style="color: #989898; padding: 5px 15px; font-size: 20px;">
                                    <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </a>
                    <br>
                    <a href="https://api.whatsapp.com/send?phone=51908934095&text=Hola&nbsp;CapPeru!&nbsp;me&nbsp;pueden&nbsp;ayudar?"
                        target="_blank" class="animate__animated animate__fadeInUp" style="width: 100%;">
                        <div class="row"
                            style="padding: 10px 15px;
                                                border-left: 5px solid #25D366; 
                                                background: #f8f8f8;
                                                box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2); /* Sombra en todos los lados */">
                            <div class="col-md-1" style="display: flex; align-items: center;">
                                <img style="100%;" src="{{ asset('themes/capperu/assets/img/redes/whatsapp.png') }}">
                            </div>
                            <div class="col-md-9" style="margin-top: 5px;">
                                <p style="font-size: 20px; display: flex; align-items: center;">Asesora 2</p>
                            </div>
                            <div class="col-md-2" style="display: flex; align-items: center;">
                                <span style="color: #989898; padding: 5px 15px; font-size: 20px;">
                                    <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </a>
                    <br>
                    <a href="https://api.whatsapp.com/send?phone=51963331758&text=Hola&nbsp;CapPeru!&nbsp;me&nbsp;pueden&nbsp;ayudar?"
                        target="_blank" class="animate__animated animate__fadeInUp" style="width: 100%;">
                        <div class="row"
                            style="padding: 10px 15px;
                                                border-left: 5px solid #25D366; 
                                                background: #f8f8f8;
                                                box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);">
                            <div class="col-md-1" style="display: flex; align-items: center;">
                                <img style="100%;" src="{{ asset('themes/capperu/assets/img/redes/whatsapp.png') }}">
                            </div>
                            <div class="col-md-9" style="margin-top: 5px;">
                                <p style="font-size: 20px; display: flex; align-items: center;">Asesora 3</p>
                            </div>
                            <div class="col-md-2" style="display: flex; align-items: center;">
                                <span style="color: #989898; padding: 5px 15px; font-size: 20px;">
                                    <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="modal-footer">
                    <button style="width: 180px;" type="button" class="btn theme-color-four" data-bs-dismiss="modal">Cerrar</button>
                </div> 
            </div>
        </div>
    </div>
</div>
