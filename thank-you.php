<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You | KarmaDocs</title>
    <meta name="robots" content="noindex, nofollow">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <style>
        *,
        *::before,
        *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Outfit', system-ui, sans-serif;
            -webkit-font-smoothing: antialiased;
            background: #fff;
            color: #1f2937;
            overflow-x: hidden;
        }

        /* ── HERO ── */
        .ty {
            position: relative;
            min-height: 100vh;
            padding: 48px 24px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #1a2b4a 0%, #763C98 55%, #1a2b4a 100%);
        }

        .ty-logo {
            height: 64px;
            filter: brightness(0) invert(1);
            margin-bottom: 32px;
        }

        .card {
            width: 100%;
            max-width: 560px;
            background: #fff;
            border-radius: 16px;
            padding: 40px 32px;
            text-align: center;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.2), 0 0 0 1px rgba(0, 0, 0, 0.04);
        }

        .check {
            width: 64px;
            height: 64px;
            background: #dcfce7;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
        }

        .check svg {
            width: 32px;
            height: 32px;
            color: #22c55e;
        }

        .card h1 {
            font-size: clamp(24px, 4vw, 32px);
            font-weight: 900;
            letter-spacing: -0.02em;
            color: #1a2b4a;
            margin-bottom: 10px;
        }

        .card p {
            font-size: 15px;
            line-height: 1.7;
            color: #6b7280;
            margin-bottom: 28px;
        }

        /* ── NEXT STEPS ── */
        .steps {
            text-align: left;
            border-top: 1px solid #f3f4f6;
            padding-top: 24px;
            margin-bottom: 28px;
        }

        .steps h2 {
            font-size: 13px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.06em;
            color: #763C98;
            margin-bottom: 14px;
        }

        .step {
            display: flex;
            gap: 12px;
            align-items: flex-start;
            margin-bottom: 12px;
            font-size: 14px;
            color: #4b5563;
            line-height: 1.6;
        }

        .step-num {
            flex-shrink: 0;
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background: rgba(118, 60, 152, 0.1);
            color: #763C98;
            font-size: 12px;
            font-weight: 700;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .btn {
            display: inline-block;
            padding: 13px 28px;
            border-radius: 100px;
            background: #763C98;
            color: #fff;
            font-size: 14px;
            font-weight: 600;
            text-decoration: none;
            transition: all .25s;
        }

        .btn:hover {
            background: #5f2f7c;
            transform: translateY(-2px);
        }

        .copy {
            margin-top: 28px;
            font-size: 12px;
            color: rgba(255, 255, 255, 0.6);
        }

        @media (max-width:640px) {
            .ty {
                padding: 32px 16px;
            }

            .ty-logo {
                height: 52px;
                margin-bottom: 24px;
            }

            .card {
                padding: 28px 18px;
                border-radius: 14px;
            }
        }
    </style>
    <!-- Meta Pixel Code -->
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return; n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0';
            n.queue = []; t = b.createElement(e); t.async = !0;
            t.src = v; s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '4100332866873996');
        fbq('track', 'PageView');
        fbq('track', 'Lead', { content_name: 'TMS Consultation', content_category: 'Mental Health' });
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=4100332866873996&ev=PageView&noscript=1" /></noscript>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=4100332866873996&ev=Lead&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->
</head>

<body>

    <section class="ty">
        <img class="ty-logo"
            src="https://res.cloudinary.com/de4kw1t2i/image/upload/v1766060387/Karma-Docs-Logo-Horizental_w48ja1.webp"
            alt="KarmaDocs">

        <div class="card">
            <div class="check">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                </svg>
            </div>
            <h1>Thank You!</h1>
            <p>Your consultation request has been received. A member of our care team will reach out within one
                business day.</p>

            <div class="steps">
                <h2>What happens next</h2>
                <div class="step"><span class="step-num">1</span><span>Our team reviews your request and checks
                        your insurance coverage.</span></div>
                <div class="step"><span class="step-num">2</span><span>We call or text you to schedule a time that
                        works for you.</span></div>
                <div class="step"><span class="step-num">3</span><span>You meet with a provider to build a
                        personalized treatment plan.</span></div>
            </div>

            <a href="index.php" class="btn">Back to Home</a>
        </div>

        <span class="copy">&copy; 2026 KarmaDocs. All rights reserved.</span>
    </section>

</body>

</html>
