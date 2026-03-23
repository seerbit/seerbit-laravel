<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SeerBit Laravel 12 Demo</title>
    <style>
        :root {
            color-scheme: light;
            --bg: #f6f7f2;
            --panel: #ffffff;
            --text: #132238;
            --muted: #53657d;
            --accent: #0f766e;
            --accent-dark: #115e59;
            --border: #d6e0ea;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            display: grid;
            place-items: center;
            padding: 24px;
            background:
                radial-gradient(circle at top right, rgba(15, 118, 110, 0.15), transparent 30%),
                linear-gradient(180deg, #fcfdf8 0%, var(--bg) 100%);
            color: var(--text);
            font-family: "Instrument Sans", "Segoe UI", sans-serif;
        }

        main {
            width: min(760px, 100%);
            background: var(--panel);
            border: 1px solid var(--border);
            border-radius: 24px;
            padding: 32px;
            box-shadow: 0 20px 60px rgba(19, 34, 56, 0.08);
        }

        h1 {
            margin: 0 0 12px;
            font-size: clamp(2rem, 4vw, 3.25rem);
            line-height: 1;
        }

        p {
            color: var(--muted);
            font-size: 1rem;
            line-height: 1.6;
        }

        .card {
            margin-top: 24px;
            padding: 20px;
            border-radius: 16px;
            background: #f8fbfd;
            border: 1px solid var(--border);
        }

        .actions {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
            margin-top: 24px;
        }

        a {
            text-decoration: none;
        }

        .button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 14px 18px;
            border-radius: 999px;
            font-weight: 700;
        }

        .button-primary {
            background: var(--accent);
            color: #fff;
        }

        .button-primary:hover {
            background: var(--accent-dark);
        }

        .button-secondary {
            color: var(--text);
            border: 1px solid var(--border);
        }

        code {
            font-family: "SFMono-Regular", Consolas, monospace;
            font-size: 0.95em;
        }
    </style>
</head>
<body>
<main>
    <p>Laravel 12 example application</p>
    <h1>SeerBit demo checkout</h1>
    <p>
        This demo app is wired to the local <code>seerbit/seerbit-laravel</code> package.
        Add your SeerBit keys to <code>example-app/.env</code>, then use the checkout route to
        initialize a sample payment request.
    </p>

    <div class="card">
        <p><strong>Expected environment variables</strong></p>
        <p><code>SEERBIT_PUBLIC_KEY</code>, <code>SEERBIT_SECRET_KEY</code>, <code>SEERBIT_TOKEN</code></p>
        <p>The callback route used by the demo is <code>{{ route('seerbit.demo.callback') }}</code>.</p>
    </div>

    <div class="actions">
        <a class="button button-primary" href="{{ route('seerbit.demo.checkout') }}">Run checkout demo</a>
        <a class="button button-secondary" href="https://doc.seerbit.com/">SeerBit docs</a>
    </div>
</main>
</body>
</html>
