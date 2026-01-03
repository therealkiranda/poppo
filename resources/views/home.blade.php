<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $homepage->hero_title ?? 'Poppo Live' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Reset & font */
        body, html { margin:0; padding:0; font-family: 'Poppins', sans-serif; }

        /* Hero section */
        .hero {
            position: relative; /* needed for overlay */
            background: url('{{ asset($homepage->hero_background ?? "images/default-hero.jpg") }}') no-repeat center center;
            background-size: cover;
            height: 100vh;
            color: white;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        /* Dark overlay */
        .hero .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.5); /* 50% dark */
            z-index: 0;
        }

        /* Text and buttons above overlay */
        .hero h1,
        .hero p,
        .hero .cta-buttons {
            position: relative;
            z-index: 1;
        }

        .hero h1 { 
            font-size: 4rem; 
            margin: 0; 
            text-shadow: 2px 2px 10px rgba(0,0,0,0.5);
        }
        .hero p { 
            font-size: 1.5rem; 
            margin: 20px 0 50px 0; 
            text-shadow: 1px 1px 8px rgba(0,0,0,0.5);
        }

        /* CTA Buttons */
        .cta-buttons a {
            display: inline-block;
            padding: 18px 40px;
            margin: 0 15px;
            font-size: 1.3rem;
            color: white;
            background: #ff66b2;
            border-radius: 50px;
            text-decoration: none;
            box-shadow: 0 5px 15px rgba(255,102,178,0.5);
            transition: 0.3s;
        }
        .cta-buttons a:hover {
            background: #ff3399;
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(255,51,153,0.6);
        }

        /* Earnings section */
        .earnings {
            background: #fff0f5;
            padding: 60px 20px;
            text-align: center;
            color: #333;
        }
        .earnings h2 { margin-bottom: 20px; font-size: 2.5rem; }
        .earnings p { font-size: 1.3rem; margin: 12px 0; }

        /* Responsive */
        @media (max-width: 768px){
            .hero h1 { font-size: 3rem; }
            .hero p { font-size: 1.2rem; }
            .cta-buttons a { padding: 15px 25px; font-size: 1.1rem; margin: 10px; }
        }
    </style>
</head>
<body>

<div class="hero">
    <!-- Overlay to darken the background -->
    <div class="overlay"></div>

    <h1>{{ $homepage->hero_title ?? 'Become a Live Host' }}</h1>
    <p>{{ $homepage->hero_subtitle ?? 'Start earning with Poppo today' }}</p>
    <div class="cta-buttons">
        <a href="{{ $homepage->host_cta_link ?? '#' }}">{{ $homepage->host_cta_text ?? 'Be a Host' }}</a>
        <a href="{{ $homepage->agent_cta_link ?? '#' }}">{{ $homepage->agent_cta_text ?? 'Be an Agent' }}</a>
    </div>
</div>

<div class="earnings">
    <h2>Why Join?</h2>
    <p>{{ $homepage->host_earnings_text ?? 'Hosts can earn more than $1000 per week.' }}</p>
    <p>{{ $homepage->agent_commission_text ?? 'Agents earn 20% commission for all hosts they add.' }}</p>
</div>


</body>
</html>
