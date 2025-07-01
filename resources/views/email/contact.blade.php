<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau Message de Contact</title>
    <style>
        body {
            background-color: #121212;
            color: #ffffff;
            padding: 0;
            margin: 0;
            font-family: 'Inter', 'Helvetica Neue', Arial, sans-serif;
            line-height: 1.5;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 30px;
            background-color: #1a1a1a;
            border-radius: 16px;
            border: 1px solid #2a2a2a;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .geometric-accent {
            width: 60px;
            height: 5px;
            background: linear-gradient(90deg, #ff4444, #cc1100);
            border-radius: 2px;
            margin: 0 auto 20px;
        }

        .title {
            font-family: 'Playfair Display', serif;
            font-size: 28px;
            font-weight: 900;
            text-align: center;
            margin: 0 0 8px;
            color: #ffffff;
            letter-spacing: -0.5px;
        }

        .subtitle {
            font-size: 13px;
            font-weight: 400;
            color: #b0b0b0;
            text-align: center;
            margin: 0 0 30px;
            letter-spacing: 0.3px;
        }

        .field {
            margin-bottom: 12px;
        }

        .label {
            font-size: 9px;
            font-weight: 700;
            text-transform: uppercase;
            color: #b0b0b0;
            letter-spacing: 1.2px;
        }

        .value {
            font-size: 17px;
            font-weight: 600;
            color: #ffffff;
        }

        .message-box {
            background: linear-gradient(180deg, #1e1e1e, #2a2a2a);
            padding: 20px;
            border-left: 4px solid #ff4444;
            border: 1px solid #3a3a3a;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 500;
            color: #ffffff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .button {
            display: inline-block;
            padding: 14px 40px;
            background: linear-gradient(90deg, #ff4444, #cc1100);
            color: #ffffff;
            text-decoration: none;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 700;
            border: 2px solid #ff6666;
            box-shadow: 0 3px 8px rgba(255, 68, 68, 0.3);
            text-align: center;
            margin: 30px auto;
            display: block;
            width: fit-content;
            transition: all 0.3s ease;
        }

        .button:hover {
            background: linear-gradient(90deg, #ff6666, #ff4444);
            border-color: #ff8888;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 68, 68, 0.4);
        }

        .footer {
            margin-top: 40px;
            font-size: 12px;
            color: #b0b0b0;
            text-align: center;
            background-color: #1a1a1a;
            padding: 20px;
            border-top: 1px solid #2a2a2a;
            border-bottom-left-radius: 16px;
            border-bottom-right-radius: 16px;
        }

        .footer strong {
            font-size: 15px;
            font-weight: 600;
            color: #ffffff;
        }

        .footer a {
            color: #ff6666;
            text-decoration: none;
            font-weight: 600;
        }

        .footer a:hover {
            color: #ff8888;
        }

        .social-links {
            margin: 15px 0;
        }

        .social-icon {
            width: 30px;
            height: 30px;
            vertical-align: middle;
            margin: 0 10px;
            filter: brightness(0) saturate(100%) invert(100%);
            transition: filter 0.3s ease;
        }

        .social-icon:hover {
            filter: brightness(0) saturate(100%) invert(62%) sepia(77%) saturate(3270%) hue-rotate(349deg) brightness(101%) contrast(103%);
        }

        @media only screen and (max-width: 600px) {
            .container {
                width: 100%;
                padding: 20px;
                margin: 10px auto;
            }

            .title {
                font-size: 24px;
            }

            .subtitle {
                font-size: 12px;
                margin-bottom: 20px;
            }

            .label {
                font-size: 9px;
            }

            .value {
                font-size: 16px;
            }

            .message-box {
                font-size: 15px;
                padding: 15px;
            }

            .button {
                padding: 12px 30px;
                font-size: 15px;
            }

            .footer {
                padding: 15px;
            }

            .social-icon {
                width: 28px;
                height: 28px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="geometric-accent"></div>
        <h1 class="title">Message Reçu</h1>
        <p class="subtitle">Un nouveau contact depuis votre portfolio.</p>

        <div class="field">
            <div class="label">Prénom</div>
            <div class="value">{{ $formData['prenom'] }}</div>
        </div>

        <div class="field">
            <div class="label">Nom</div>
            <div class="value">{{ $formData['nom'] }}</div>
        </div>

        <div class="field">
            <div class="label">Email</div>
            <div class="value">{{ $formData['email'] }}</div>
        </div>

        <div class="field">
            <div class="label">Téléphone</div>
            <div class="value">{{ $formData['telephone'] ?? 'Non fourni' }}</div>
        </div>

        <div class="field">
            <div class="label">Service</div>
            <div class="value">{{ $formData['service'] }}</div>
        </div>

        <div class="field">
            <div class="label">Message</div>
            <div class="message-box">{{ $formData['message'] }}</div>
        </div>

        <div style="text-align: center;">
            <a href="mailto:{{ $formData['email'] }}" class="button">Répondre à {{ $formData['prenom'] }}</a>
        </div>

        <div class="footer">
            <p><strong>KI Brou Alexis</strong><br>Développeur Web | Visionnaire Digital</p>
            <div class="social-links">
                <a href="https://www.linkedin.com/in/alexis-ki-099781358">
                    <img src="https://img.icons8.com/ios-filled/30/ffffff/linkedin.png" alt="LinkedIn"
                        class="social-icon">
                </a>
                <a href="https://github.com/Toutvendre">
                    <img src="https://img.icons8.com/ios-filled/30/ffffff/github.png" alt="GitHub"
                        class="social-icon">
                </a>
                <a href="https://x.com/AlexisKI07">
                    <img src="https://img.icons8.com/ios-filled/30/ffffff/twitter.png" alt="Twitter"
                        class="social-icon">
                </a>
            </div>
            <p>Depuis <a href="{{ env('APP_URL') }}">mon portfolio</a> | © {{ now()->year }} KI Brou Alexis</p>
        </div>
    </div>
</body>

</html>
