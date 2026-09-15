<?php
$deploymentTime = date('d-m-Y H:i:s T');
$phpVersion = phpversion();
$serverSoftware = $_SERVER['SERVER_SOFTWARE'] ?? 'Unknown Server';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InfinityFree Auto-Deploy Success!</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
        }
        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
            color: #f8fafc;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .card {
            background: rgba(30, 41, 59, 0.7);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 40px;
            max-width: 600px;
            width: 100%;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
            text-align: center;
        }
        .badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(16, 185, 129, 0.2);
            color: #34d399;
            border: 1px solid rgba(52, 211, 153, 0.3);
            padding: 6px 16px;
            border-radius: 9999px;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 24px;
        }
        .badge-dot {
            width: 8px;
            height: 8px;
            background: #10b981;
            border-radius: 50%;
            box-shadow: 0 0 10px #10b981;
        }
        h1 {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 12px;
            background: linear-gradient(to right, #38bdf8, #818cf8);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        p.subtitle {
            color: #94a3b8;
            font-size: 15px;
            margin-bottom: 30px;
            line-height: 1.5;
        }
        .info-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            margin-bottom: 30px;
            text-align: left;
        }
        .info-box {
            background: rgba(15, 23, 42, 0.6);
            border: 1px solid rgba(255, 255, 255, 0.05);
            padding: 16px;
            border-radius: 12px;
        }
        .info-label {
            font-size: 12px;
            color: #64748b;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-bottom: 6px;
        }
        .info-value {
            font-size: 14px;
            color: #e2e8f0;
            font-weight: 600;
            word-break: break-all;
        }
        .footer-note {
            color: #64748b;
            font-size: 13px;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="badge">
            <span class="badge-dot"></span>
            ⚡ Live Update Tested by Vikash Testing
        </div>
        <h1>Hello Vikash! Auto-Deploy Bilkul Mast Kaam Kar Raha Hai! 🔥</h1>
        <p class="subtitle">
            Ye website GitHub repo par commit push hote hi bina kisi FTP software ke automatically InfinityFree par live ho gayi hai.
        </p>

        <div class="info-grid">
            <div class="info-box">
                <div class="info-label">Hosting Provider</div>
                <div class="info-value">InfinityFree (Free Tier)</div>
            </div>
            <div class="info-box">
                <div class="info-label">PHP Version</div>
                <div class="info-value">v<?= htmlspecialchars($phpVersion) ?></div>
            </div>
            <div class="info-box" style="grid-column: span 2;">
                <div class="info-label">Server Timestamp</div>
                <div class="info-value"><?= htmlspecialchars($deploymentTime) ?></div>
            </div>
        </div>

        <p class="footer-note">
            Made with ❤️ using GitHub Actions & SamKirkland/FTP-Deploy-Action
        </p>
    </div>
</body>
</html>

