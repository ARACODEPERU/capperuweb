<div>
    <div class="whatsapp-widget">
        <!-- Chat Box -->
        <div class="whatsapp-chat-box" id="whatsappChatBox">
            <div class="chat-header">
                <div class="header-content">
                    <div class="icon-wrap">
                        <i class="fa fa-whatsapp"></i>
                    </div>
                    <div class="text-wrap">
                        <h5 class="m-0">¡Hola! 👋</h5>
                        <p class="m-0">¿En qué podemos ayudarte?</p>
                    </div>
                </div>
                <button type="button" class="close-btn" onclick="toggleWhatsappChat()">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            
            <div class="chat-body">
                <p class="chat-intro">Selecciona una asesora para chatear:</p>
                
                <!-- Asesora 1 -->
                <a href="https://api.whatsapp.com/send?phone=51977662460&text=Hola&nbsp;CapPeru!&nbsp;me&nbsp;pueden&nbsp;ayudar?" target="_blank" class="agent-card">
                    <div class="agent-avatar">
                        <img src="{{ asset('themes/capperu/assets/img/redes/whatsapp.png') }}" alt="Asesora">
                        <span class="status-dot"></span>
                    </div>
                    <div class="agent-info">
                        <span class="agent-name">Asesora 1</span>
                        <span class="agent-role">Atención al cliente</span>
                    </div>
                    <div class="agent-icon">
                        <i class="fa fa-chevron-right"></i>
                    </div>
                </a>

                <!-- Asesora 2 -->
                <a href="https://api.whatsapp.com/send?phone=51908934095&text=Hola&nbsp;CapPeru!&nbsp;me&nbsp;pueden&nbsp;ayudar?" target="_blank" class="agent-card">
                    <div class="agent-avatar">
                        <img src="{{ asset('themes/capperu/assets/img/redes/whatsapp.png') }}" alt="Asesora">
                        <span class="status-dot"></span>
                    </div>
                    <div class="agent-info">
                        <span class="agent-name">Asesora 2</span>
                        <span class="agent-role">Ventas</span>
                    </div>
                    <div class="agent-icon">
                        <i class="fa fa-chevron-right"></i>
                    </div>
                </a>

                <!-- Asesora 3 -->
                <a href="https://api.whatsapp.com/send?phone=51963331758&text=Hola&nbsp;CapPeru!&nbsp;me&nbsp;pueden&nbsp;ayudar?" target="_blank" class="agent-card">
                    <div class="agent-avatar">
                        <img src="{{ asset('themes/capperu/assets/img/redes/whatsapp.png') }}" alt="Asesora">
                        <span class="status-dot"></span>
                    </div>
                    <div class="agent-info">
                        <span class="agent-name">Asesora 3</span>
                        <span class="agent-role">Soporte</span>
                    </div>
                    <div class="agent-icon">
                        <i class="fa fa-chevron-right"></i>
                    </div>
                </a>
            </div>
            
            <div class="chat-footer">
                <small>Solemos responder en minutos</small>
            </div>
        </div>

        <!-- Floating Button -->
        <button class="whatsapp-trigger" onclick="toggleWhatsappChat()">
            <i class="fa fa-whatsapp"></i>
        </button>
    </div>

    <style>
        .whatsapp-widget {
            position: fixed;
            bottom: 80px;
            right: 30px;
            z-index: 9999;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* Trigger Button */
        .whatsapp-trigger {
            width: 60px;
            height: 60px;
            background-color: #25D366;
            color: white;
            border-radius: 50%;
            border: none;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            font-size: 30px;
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .whatsapp-trigger:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 16px rgba(0,0,0,0.2);
        }

        .whatsapp-trigger::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background: rgba(37, 211, 102, 0.5);
            z-index: -1;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1); opacity: 0.8; }
            100% { transform: scale(1.5); opacity: 0; }
        }

        /* Chat Box */
        .whatsapp-chat-box {
            position: absolute;
            bottom: 80px;
            right: 0;
            width: 320px;
            background: white;
            border-radius: 16px;
            box-shadow: 0 5px 25px rgba(0,0,0,0.15);
            overflow: hidden;
            opacity: 0;
            visibility: hidden;
            transform: translateY(20px) scale(0.95);
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
            transform-origin: bottom right;
        }

        .whatsapp-chat-box.active {
            opacity: 1;
            visibility: visible;
            transform: translateY(0) scale(1);
        }

        /* Header */
        .chat-header {
            background: linear-gradient(135deg, #00b147 0%, #25D366 100%);
            color: white;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        .header-content {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .header-content .icon-wrap {
            font-size: 24px;
        }

        .header-content h5 {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 2px;
            color: white;
        }

        .header-content p {
            font-size: 13px;
            opacity: 0.9;
            color: #f0f0f0;
        }

        .close-btn {
            background: none;
            border: none;
            color: white;
            font-size: 16px;
            cursor: pointer;
            opacity: 0.8;
            padding: 0;
        }

        .close-btn:hover {
            opacity: 1;
        }

        /* Body */
        .chat-body {
            padding: 15px;
            background: #f9f9f9;
        }

        .chat-intro {
            font-size: 13px;
            color: #666;
            margin-bottom: 12px;
            text-align: center;
        }

        .agent-card {
            display: flex;
            align-items: center;
            background: white;
            padding: 12px;
            border-radius: 12px;
            margin-bottom: 10px;
            text-decoration: none;
            color: #333;
            border: 1px solid #eee;
            transition: all 0.2s ease;
        }

        .agent-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
            border-color: #25D366;
        }

        .agent-avatar {
            position: relative;
            margin-right: 12px;
        }

        .agent-avatar img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
        }

        .status-dot {
            position: absolute;
            bottom: 2px;
            right: 0;
            width: 10px;
            height: 10px;
            background: #25D366;
            border: 2px solid white;
            border-radius: 50%;
        }

        .agent-info {
            flex: 1;
        }

        .agent-name {
            display: block;
            font-weight: 600;
            font-size: 15px;
            color: #333;
        }

        .agent-role {
            display: block;
            font-size: 12px;
            color: #888;
        }

        .agent-icon {
            color: #ccc;
            font-size: 14px;
        }

        .agent-card:hover .agent-icon {
            color: #25D366;
        }

        /* Footer */
        .chat-footer {
            background: white;
            padding: 10px;
            text-align: center;
            border-top: 1px solid #eee;
            color: #999;
            font-size: 11px;
        }
    </style>

    <script>
        function toggleWhatsappChat() {
            var chatBox = document.getElementById('whatsappChatBox');
            chatBox.classList.toggle('active');
        }
    </script>
</div>
