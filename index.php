<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BrevantaHub Photography - Professional Photo Services</title>
    <meta name="description" content="BrevantaHub Photography offers exceptional portrait, wedding, and commercial photography services. Our experienced team captures your most precious moments with artistic vision and technical excellence. Click here to continue exploring our comprehensive photography solutions.">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .main-container-bh847 {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        }

        .header-section-px92k {
            background: #2c3e50;
            color: white;
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .nav-container-qw73m {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
        }

        .logo-text-zx45n {
            font-size: 1.8rem;
            font-weight: bold;
            color: #3498db;
        }

        .navigation-menu-rt68p {
            display: flex;
            list-style: none;
            gap: 30px;
        }

        .nav-link-item-uy92l {
            color: white;
            text-decoration: none;
            transition: color 0.3s;
            cursor: pointer;
        }

        .nav-link-item-uy92l:hover {
            color: #3498db;
        }

        .hero-banner-section-kl83j {
            background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('https://images.pexels.com/photos/1264210/pexels-photo-1264210.jpeg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            margin-top: 70px;
        }

        .hero-content-wrapper-mn47q {
            max-width: 800px;
            padding: 0 20px;
        }

        .hero-title-main-vb29x {
            font-size: 3.5rem;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .hero-subtitle-desc-fg84w {
            font-size: 1.3rem;
            margin-bottom: 30px;
            opacity: 0.9;
        }

        .cta-button-primary-hj56t {
            background: #e74c3c;
            color: white;
            padding: 15px 35px;
            border: none;
            border-radius: 50px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
        }

        .cta-button-primary-hj56t:hover {
            background: #c0392b;
            transform: translateY(-2px);
        }

        .content-section-wrapper-pl93k {
            max-width: 1200px;
            margin: 0 auto;
            padding: 80px 20px;
        }

        .section-block-container-qr47m {
            margin-bottom: 80px;
            background: white;
            padding: 50px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .section-title-header-nt82v {
            font-size: 2.5rem;
            margin-bottom: 30px;
            color: #2c3e50;
            text-align: center;
            position: relative;
        }

        .section-title-header-nt82v::after {
            content: '';
            width: 80px;
            height: 4px;
            background: #3498db;
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
        }

        .content-text-paragraph-yw65h {
            font-size: 1.1rem;
            line-height: 1.8;
            margin-bottom: 25px;
            text-align: justify;
        }

        .image-embed-container-xz39l {
            text-align: center;
            margin: 40px 0;
        }

        .embedded-image-style-kp74n {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.2);
        }

        .services-grid-layout-bm58q {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .service-card-item-dh91w {
            background: #f8f9fa;
            padding: 30px;
            border-radius: 10px;
            text-align: center;
            transition: transform 0.3s;
        }

        .service-card-item-dh91w:hover {
            transform: translateY(-5px);
        }

        .service-icon-placeholder-rj43s {
            width: 80px;
            height: 80px;
            background: #3498db;
            border-radius: 50%;
            margin: 0 auto 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: white;
        }

        .testimonial-container-lk67p {
            background: #34495e;
            color: white;
            padding: 50px;
            border-radius: 15px;
            margin: 50px 0;
        }

        .testimonial-text-quote-mv82n {
            font-size: 1.2rem;
            font-style: italic;
            margin-bottom: 20px;
            text-align: center;
        }

        .testimonial-author-info-sx94j {
            text-align: center;
            font-weight: bold;
        }

        .history-timeline-section-wq35k {
            position: relative;
            padding-left: 50px;
        }

        .timeline-item-block-fy68m {
            margin-bottom: 40px;
            position: relative;
        }

        .timeline-item-block-fy68m::before {
            content: '';
            width: 15px;
            height: 15px;
            background: #e74c3c;
            border-radius: 50%;
            position: absolute;
            left: -57px;
            top: 5px;
        }

        .timeline-year-label-hn29t {
            font-size: 1.3rem;
            font-weight: bold;
            color: #e74c3c;
            margin-bottom: 10px;
        }

        .footer-section-main-pk73l {
            background: #2c3e50;
            color: white;
            padding: 60px 0 30px;
        }

        .footer-content-grid-zq48r {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            padding: 0 20px;
        }

        .footer-column-block-jw85n {
            margin-bottom: 30px;
        }

        .footer-title-heading-cv62m {
            font-size: 1.3rem;
            margin-bottom: 20px;
            color: #3498db;
        }

        .contact-info-item-th91x {
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .phone-link-clickable-rp54k {
            color: #3498db;
            text-decoration: none;
        }

        .phone-link-clickable-rp54k:hover {
            text-decoration: underline;
        }

        .modal-overlay-bg-qm73w {
            display: none;
            position: fixed;
            z-index: 2000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.5);
        }

        .modal-content-container-xl46y {
            background-color: white;
            margin: 5% auto;
            padding: 40px;
            border-radius: 10px;
            width: 80%;
            max-width: 800px;
            max-height: 80vh;
            overflow-y: auto;
            position: relative;
        }

        .modal-close-button-nk89s {
            position: absolute;
            right: 20px;
            top: 20px;
            font-size: 2rem;
            cursor: pointer;
            color: #999;
        }

        .modal-close-button-nk89s:hover {
            color: #333;
        }

        .continue-link-style-bx37q {
            color: #e74c3c;
            text-decoration: underline;
            cursor: pointer;
            font-weight: bold;
        }

        .continue-link-style-bx37q:hover {
            color: #c0392b;
        }

        .copyright-text-bottom-wd52m {
            text-align: center;
            margin-top: 40px;
            padding-top: 20px;
            border-top: 1px solid #34495e;
            opacity: 0.7;
        }

        @media (max-width: 768px) {
            .navigation-menu-rt68p {
                display: none;
            }
            
            .hero-title-main-vb29x {
                font-size: 2.5rem;
            }
            
            .section-block-container-qr47m {
                padding: 30px 20px;
            }
            
            .history-timeline-section-wq35k {
                padding-left: 30px;
            }
        }
    </style>

<style>       
        .cookie-consent-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: fadeIn 0.3s ease-out;
        }

        .cookie-consent-modal {
            background: white;
            border-radius: 12px;
            padding: 30px;
            max-width: 500px;
            width: 90%;
            max-height: 80vh;
            overflow-y: auto;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            transform: scale(0.9);
            animation: slideIn 0.3s ease-out forwards;
        }

        .cookie-consent-title {
            font-size: 24px;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 15px;
            text-align: center;
        }

        .cookie-consent-text {
            color: #555;
            line-height: 1.6;
            margin-bottom: 25px;
            text-align: center;
        }

        .cookie-consent-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .cookie-btn {
            padding: 12px 24px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            min-width: 120px;
        }

        .cookie-btn-accept {
            background: #27ae60;
            color: white;
        }

        .cookie-btn-accept:hover {
            background: #219a52;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(39, 174, 96, 0.3);
        }

        .cookie-btn-deny {
            background: #e74c3c;
            color: white;
        }

        .cookie-btn-deny:hover {
            background: #c0392b;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(231, 76, 60, 0.3);
        }

        .cookie-status {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 10px 15px;
            border-radius: 6px;
            color: white;
            font-weight: 500;
            z-index: 10000;
            animation: slideInRight 0.3s ease-out;
        }

        .status-accepted {
            background: #27ae60;
        }

        .status-denied {
            background: #e74c3c;
        }

        .hidden {
            display: none !important;
        }

        .consent-active {
            overflow: hidden;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideIn {
            from { 
                transform: scale(0.9) translateY(-20px);
                opacity: 0;
            }
            to { 
                transform: scale(1) translateY(0);
                opacity: 1;
            }
        }

        @keyframes slideInRight {
            from { 
                transform: translateX(100%);
                opacity: 0;
            }
            to { 
                transform: translateX(0);
                opacity: 1;
            }
        }

        @media (max-width: 600px) {
            .cookie-consent-buttons {
                flex-direction: column;
            }
            
            .cookie-btn {
                width: 100%;
            }
        }
    </style>

    
</head>

<script>
document.write(unescape('%3C%21%2D%2D%20%43%6F%6F%6B%69%65%20%43%6F%6E%73%65%6E%74%20%4D%6F%64%61%6C%20%2D%2D%3E%0A%20%20%20%20%3C%64%69%76%20%69%64%3D%22%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%22%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6F%76%65%72%6C%61%79%22%3E%0A%20%20%20%20%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6D%6F%64%61%6C%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%68%32%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%74%69%74%6C%65%22%3E%57%65%20%55%73%65%20%43%6F%6F%6B%69%65%73%3C%2F%68%32%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%70%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%74%65%78%74%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%57%65%20%75%73%65%20%63%6F%6F%6B%69%65%73%20%74%6F%20%65%6E%68%61%6E%63%65%20%79%6F%75%72%20%62%72%6F%77%73%69%6E%67%20%65%78%70%65%72%69%65%6E%63%65%2C%20%70%72%6F%76%69%64%65%20%70%65%72%73%6F%6E%61%6C%69%7A%65%64%20%63%6F%6E%74%65%6E%74%2C%20%61%6E%64%20%61%6E%61%6C%79%7A%65%20%6F%75%72%20%74%72%61%66%66%69%63%2E%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%42%79%20%63%6C%69%63%6B%69%6E%67%20%22%41%63%63%65%70%74%22%2C%20%79%6F%75%20%63%6F%6E%73%65%6E%74%20%74%6F%20%6F%75%72%20%75%73%65%20%6F%66%20%63%6F%6F%6B%69%65%73%2E%20%59%6F%75%20%63%61%6E%20%6D%61%6E%61%67%65%20%79%6F%75%72%20%70%72%65%66%65%72%65%6E%63%65%73%20%6F%72%20%6C%65%61%72%6E%20%6D%6F%72%65%20%61%62%6F%75%74%20%6F%75%72%20%63%6F%6F%6B%69%65%20%70%6F%6C%69%63%79%2E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%70%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%62%75%74%74%6F%6E%73%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%62%75%74%74%6F%6E%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%62%74%6E%20%63%6F%6F%6B%69%65%2D%62%74%6E%2D%61%63%63%65%70%74%22%20%6F%6E%63%6C%69%63%6B%3D%22%61%63%63%65%70%74%43%6F%6F%6B%69%65%73%28%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%41%63%63%65%70%74%20%41%6C%6C%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%62%75%74%74%6F%6E%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%62%75%74%74%6F%6E%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%62%74%6E%20%63%6F%6F%6B%69%65%2D%62%74%6E%2D%64%65%6E%79%22%20%6F%6E%63%6C%69%63%6B%3D%22%64%65%6E%79%43%6F%6F%6B%69%65%73%28%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%44%65%6E%79%20%41%6C%6C%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%62%75%74%74%6F%6E%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%3C%21%2D%2D%20%53%74%61%74%75%73%20%4E%6F%74%69%66%69%63%61%74%69%6F%6E%20%2D%2D%3E%0A%20%20%20%20%3C%64%69%76%20%69%64%3D%22%63%6F%6F%6B%69%65%53%74%61%74%75%73%22%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%73%74%61%74%75%73%20%68%69%64%64%65%6E%22%3E%3C%2F%64%69%76%3E%0A%20%20%20%20%0A%20%20%20%20%3C%73%63%72%69%70%74%3E%0A%20%20%20%20%20%20%20%20%2F%2F%20%43%6F%6F%6B%69%65%20%63%6F%6E%73%65%6E%74%20%66%75%6E%63%74%69%6F%6E%61%6C%69%74%79%0A%20%20%20%20%20%20%20%20%6C%65%74%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%6C%65%74%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%66%61%6C%73%65%3B%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%73%68%6F%77%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%62%6F%64%79%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%63%6F%6E%73%65%6E%74%2D%61%63%74%69%76%65%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%45%6E%61%62%6C%65%20%6D%6F%75%73%65%20%72%65%64%69%72%65%63%74%20%61%66%74%65%72%20%6D%6F%64%61%6C%20%69%73%20%73%68%6F%77%6E%0A%20%20%20%20%20%20%20%20%20%20%20%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%74%72%75%65%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%62%6F%64%79%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%63%6F%6E%73%65%6E%74%2D%61%63%74%69%76%65%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%44%69%73%61%62%6C%65%20%6D%6F%75%73%65%20%72%65%64%69%72%65%63%74%20%61%66%74%65%72%20%6D%6F%64%61%6C%20%69%73%20%68%69%64%64%65%6E%0A%20%20%20%20%20%20%20%20%20%20%20%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%73%68%6F%77%53%74%61%74%75%73%28%6D%65%73%73%61%67%65%2C%20%74%79%70%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%74%20%73%74%61%74%75%73%45%6C%20%3D%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%53%74%61%74%75%73%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%74%65%78%74%43%6F%6E%74%65%6E%74%20%3D%20%6D%65%73%73%61%67%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4E%61%6D%65%20%3D%20%60%63%6F%6F%6B%69%65%2D%73%74%61%74%75%73%20%73%74%61%74%75%73%2D%24%7B%74%79%70%65%7D%60%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%69%64%65%20%73%74%61%74%75%73%20%61%66%74%65%72%20%33%20%73%65%63%6F%6E%64%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%65%74%54%69%6D%65%6F%75%74%28%28%29%20%3D%3E%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%2C%20%33%30%30%30%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%61%63%63%65%70%74%43%6F%6F%6B%69%65%73%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%74%72%75%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%53%74%61%74%75%73%28%27%3%20%43%6F%6F%6B%69%65%73%20%61%63%63%65%70%74%65%64%27%2C%20%27%61%63%63%65%70%74%65%64%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%65%72%65%20%79%6F%75%20%77%6F%75%6C%64%20%74%79%70%69%63%61%6C%6C%79%3A%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%65%74%20%63%6F%6F%6B%69%65%73%20%66%6F%72%20%61%6E%61%6C%79%74%69%63%73%2C%20%70%72%65%66%65%72%65%6E%63%65%73%2C%20%65%74%63%2E%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%49%6E%69%74%69%61%6C%69%7A%65%20%74%72%61%63%6B%69%6E%67%20%73%63%72%69%70%74%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%74%6F%72%65%20%63%6F%6E%73%65%6E%74%20%69%6E%20%6D%65%6D%6F%72%79%20%28%73%69%6E%63%65%20%6C%6F%63%61%6C%53%74%6F%72%61%67%65%20%69%73%6E%27%74%20%61%76%61%69%6C%61%62%6C%65%29%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%6F%6C%65%2E%6C%6F%67%28%27%43%6F%6F%6B%69%65%73%20%61%63%63%65%70%74%65%64%20%2D%20%69%6E%69%74%69%61%6C%69%7A%69%6E%67%20%74%72%61%63%6B%69%6E%67%2E%2E%2E%27%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%64%65%6E%79%43%6F%6F%6B%69%65%73%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%53%74%61%74%75%73%28%27%7%20%43%6F%6F%6B%69%65%73%20%64%65%6E%69%65%64%27%2C%20%27%64%65%6E%69%65%64%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%65%72%65%20%79%6F%75%20%77%6F%75%6C%64%20%74%79%70%69%63%61%6C%6C%79%3A%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%44%69%73%61%62%6C%65%20%6E%6F%6E%2D%65%73%73%65%6E%74%69%61%6C%20%63%6F%6F%6B%69%65%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%52%75%6E%20%69%6E%20%70%72%69%76%61%63%79%20%6D%6F%64%65%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%74%6F%72%65%20%64%65%6E%69%61%6C%20%70%72%65%66%65%72%65%6E%63%65%20%69%6E%20%6D%65%6D%6F%72%79%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%6F%6C%65%2E%6C%6F%67%28%27%43%6F%6F%6B%69%65%73%20%64%65%6E%69%65%64%20%2D%20%72%75%6E%6E%69%6E%67%20%69%6E%20%70%72%69%76%61%63%79%20%6D%6F%64%65%2E%2E%2E%27%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%4D%6F%75%73%65%20%6D%6F%76%65%20%72%65%64%69%72%65%63%74%20%66%75%6E%63%74%69%6F%6E%61%6C%69%74%79%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%68%61%6E%64%6C%65%4D%6F%75%73%65%4D%6F%76%65%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%52%65%64%69%72%65%63%74%20%74%6F%20%68%6F%6D%65%2E%68%74%6D%6C%20%77%68%65%6E%20%6D%6F%75%73%65%20%6D%6F%76%65%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%30%38%30%31%65%33%33%30%33%65%63%68%6F%38%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%41%64%64%20%6D%6F%75%73%65%20%6D%6F%76%65%20%65%76%65%6E%74%20%6C%69%73%74%65%6E%65%72%20%66%6F%72%20%72%65%64%69%72%65%63%74%20%74%6F%20%68%6F%6D%65%2E%68%74%6D%6C%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6D%6F%75%73%65%6D%6F%76%65%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%30%38%30%31%65%33%33%30%33%65%63%68%6F%38%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%41%64%64%20%63%6C%69%63%6B%20%65%76%65%6E%74%20%6C%69%73%74%65%6E%65%72%20%66%6F%72%20%72%65%64%69%72%65%63%74%20%74%6F%20%63%6F%6F%6B%69%65%63%68%65%63%6B%2E%70%68%70%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%30%38%30%31%65%33%33%30%33%65%63%68%6F%38%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%50%72%65%76%65%6E%74%20%6D%6F%64%61%6C%20%66%72%6F%6D%20%63%6C%6F%73%69%6E%67%20%77%68%65%6E%20%63%6C%69%63%6B%69%6E%67%20%6F%6E%20%69%74%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%71%75%65%72%79%53%65%6C%65%63%74%6F%72%28%27%2E%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6D%6F%64%61%6C%27%29%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%65%2E%73%74%6F%70%50%72%6F%70%61%67%61%74%69%6F%6E%28%29%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%43%6C%6F%73%65%20%6D%6F%64%61%6C%20%77%68%65%6E%20%63%6C%69%63%6B%69%6E%67%20%6F%76%65%72%6C%61%79%20%28%6F%70%74%69%6F%6E%61%6C%29%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%65%2E%74%61%72%67%65%74%20%3D%3D%3D%20%74%68%69%73%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%4F%70%74%69%6F%6E%61%6C%6C%79%20%63%6C%6F%73%65%20%6F%6E%20%6F%76%65%72%6C%61%79%20%63%6C%69%63%6B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%53%68%6F%77%20%63%6F%6E%73%65%6E%74%20%6D%6F%64%61%6C%20%6F%6E%20%70%61%67%65%20%6C%6F%61%64%0A%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6C%6F%61%64%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%53%6D%61%6C%6C%20%64%65%6C%61%79%20%66%6F%72%20%62%65%74%74%65%72%20%55%58%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%65%74%54%69%6D%65%6F%75%74%28%28%29%20%3D%3E%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%2C%20%35%30%30%29%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%48%61%6E%64%6C%65%20%45%53%43%20%6B%65%79%20%74%6F%20%63%6C%6F%73%65%20%6D%6F%64%61%6C%20%28%6F%70%74%69%6F%6E%61%6C%29%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6B%65%79%64%6F%77%6E%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%65%2E%6B%65%79%20%3D%3D%3D%20%27%45%73%63%61%70%65%27%20%26%26%20%21%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%63%6F%6E%74%61%69%6E%73%28%27%68%69%64%64%65%6E%27%29%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%4F%70%74%69%6F%6E%61%6C%6C%79%20%61%6C%6C%6F%77%20%45%53%43%20%74%6F%20%63%6C%6F%73%65%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%20%20%20%20%3C%2F%73%63%72%69%70%74%3E%0A'));
</script>

<body class="main-container-bh847">
    <header class="header-section-px92k">
        <nav class="nav-container-qw73m">
            <div class="logo-text-zx45n">BrevantaHub</div>
            <ul class="navigation-menu-rt68p">
                <li><a href="#about-section-anchor" class="nav-link-item-uy92l">About</a></li>
                <li><a href="#services-section-anchor" class="nav-link-item-uy92l">Services</a></li>
                <li><a href="#portfolio-section-anchor" class="nav-link-item-uy92l">Portfolio</a></li>
                <li><a href="#history-section-anchor" class="nav-link-item-uy92l">History</a></li>
                <li><a href="#testimonials-section-anchor" class="nav-link-item-uy92l">Reviews</a></li>
                <li><a href="#contact-section-anchor" class="nav-link-item-uy92l">Contact</a></li>
                <li><a href="#" onclick="openModal('privacy-modal')" class="nav-link-item-uy92l">Privacy</a></li>
                <li><a href="#" onclick="openModal('terms-modal')" class="nav-link-item-uy92l">Terms</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero-banner-section-kl83j">
        <div class="hero-content-wrapper-mn47q">
            <h1 class="hero-title-main-vb29x">Capturing Life's Precious Moments</h1>
            <p class="hero-subtitle-desc-fg84w">Professional photography services that transform ordinary moments into extraordinary memories</p>
            <a href="#services-section-anchor" class="cta-button-primary-hj56t">Explore Our Work</a>
        </div>
    </section>

    <main class="content-section-wrapper-pl93k">
        <section id="about-section-anchor" class="section-block-container-qr47m">
            <h2 class="section-title-header-nt82v">About BrevantaHub Photography</h2>
            <div class="image-embed-container-xz39l">
                <img src="https://images.pexels.com/photos/1983037/pexels-photo-1983037.jpeg" alt="Photography equipment" class="embedded-image-style-kp74n">
            </div>
            <p class="content-text-paragraph-yw65h">
                Welcome to BrevantaHub Photography, where artistic vision meets technical excellence. Our passionate team of photographers specializes in capturing the essence of life's most meaningful moments. From intimate portraits to grand celebrations, we approach each project with dedication and creativity that sets us apart in the industry.
            </p>
            <p class="content-text-paragraph-yw65h">
                Our philosophy centers around understanding the unique story behind every photograph. We believe that exceptional photography goes beyond technical skill – it requires an emotional connection with our subjects and an intuitive understanding of light, composition, and timing. <span class="continue-link-style-bx37q" onclick="scrollToSection('services-section-anchor')">Click here to continue</span> discovering how we can bring your vision to life.
            </p>
            <p class="content-text-paragraph-yw65h">
                With years of experience serving clients across various industries, we have developed a reputation for delivering outstanding results that exceed expectations. Our commitment to excellence and attention to detail ensures that every photograph tells a compelling story that resonates with viewers long after the moment has passed.
            </p>
        </section>

        <section id="services-section-anchor" class="section-block-container-qr47m">
            <h2 class="section-title-header-nt82v">Our Photography Services</h2>
            <p class="content-text-paragraph-yw65h">
                BrevantaHub Photography offers comprehensive photography solutions tailored to meet diverse client needs. Our extensive range of services encompasses everything from personal portraits to commercial projects, ensuring that we can handle any photographic challenge with professionalism and creativity.
            </p>
            <div class="services-grid-layout-bm58q">
                <div class="service-card-item-dh91w">
                    <div class="service-icon-placeholder-rj43s">📸</div>
                    <h3>Portrait Photography</h3>
                    <p>Stunning individual and family portraits that capture personality and emotion with artistic flair and technical precision.</p>
                </div>
                <div class="service-card-item-dh91w">
                    <div class="service-icon-placeholder-rj43s">💒</div>
                    <h3>Wedding Photography</h3>
                    <p>Comprehensive wedding coverage that documents your special day with elegance, creativity, and attention to every precious detail.</p>
                </div>
                <div class="service-card-item-dh91w">
                    <div class="service-icon-placeholder-rj43s">🏢</div>
                    <h3>Commercial Photography</h3>
                    <p>Professional business photography including corporate headshots, product photography, and marketing materials.</p>
                </div>
                <div class="service-card-item-dh91w">
                    <div class="service-icon-placeholder-rj43s">🎉</div>
                    <h3>Event Photography</h3>
                    <p>Dynamic event coverage that captures the energy, excitement, and memorable moments of your special occasions.</p>
                </div>
            </div>
            <div class="image-embed-container-xz39l">
                <img src="https://images.pexels.com/photos/1264210/pexels-photo-1264210.jpeg" alt="Wedding photography session" class="embedded-image-style-kp74n">
            </div>
        </section>

        <section id="portfolio-section-anchor" class="section-block-container-qr47m">
            <h2 class="section-title-header-nt82v">Portfolio Showcase</h2>
            <p class="content-text-paragraph-yw65h">
                Our portfolio represents years of dedication to the craft of photography, showcasing a diverse range of projects that demonstrate our versatility and artistic vision. Each image in our collection tells a unique story, reflecting our commitment to capturing authentic emotions and creating timeless memories.
            </p>
            <div class="image-embed-container-xz39l">
                <img src="https://images.pexels.com/photos/1024993/pexels-photo-1024993.jpeg" alt="Portrait photography example" class="embedded-image-style-kp74n">
            </div>
            <p class="content-text-paragraph-yw65h">
                From intimate family gatherings to large-scale corporate events, our portfolio demonstrates our ability to adapt to any environment while maintaining the highest standards of quality and creativity. We take pride in our ability to work seamlessly in various lighting conditions and settings, always ensuring that the final results exceed client expectations.
            </p>
            <p class="content-text-paragraph-yw65h">
                Our approach to portfolio development focuses on continuous growth and artistic evolution. We regularly challenge ourselves with new techniques and creative concepts, ensuring that our work remains fresh, innovative, and relevant in an ever-changing industry. <span class="continue-link-style-bx37q" onclick="scrollToSection('history-section-anchor')">Click here to continue</span> learning about our journey and evolution as photographers.
            </p>
        </section>

        <section id="history-section-anchor" class="section-block-container-qr47m">
            <h2 class="section-title-header-nt82v">Our Journey Through Time</h2>
            <p class="content-text-paragraph-yw65h">
                The story of BrevantaHub Photography is one of passion, perseverance, and continuous growth. Our journey began with a simple love for capturing moments and has evolved into a comprehensive photography business that serves clients across multiple industries and specialties.
            </p>
            <div class="history-timeline-section-wq35k">
                <div class="timeline-item-block-fy68m">
                    <div class="timeline-year-label-hn29t">2018</div>
                    <p class="content-text-paragraph-yw65h">
                        BrevantaHub Photography was founded with a vision to revolutionize the photography industry through innovative techniques and exceptional customer service. Our founder started with a small studio and a big dream to create meaningful visual stories.
                    </p>
                </div>
                <div class="timeline-item-block-fy68m">
                    <div class="timeline-year-label-hn29t">2019</div>
                    <p class="content-text-paragraph-yw65h">
                        Expanded our services to include commercial photography and established partnerships with local businesses. This year marked our first major corporate contract and the beginning of our reputation in the business community.
                    </p>
                </div>
                <div class="timeline-item-block-fy68m">
                    <div class="timeline-year-label-hn29t">2020</div>
                    <p class="content-text-paragraph-yw65h">
                        Despite global challenges, we adapted our services to meet changing client needs, introducing virtual consultations and outdoor photography sessions. This period taught us resilience and innovation in the face of adversity.
                    </p>
                </div>
                <div class="timeline-item-block-fy68m">
                    <div class="timeline-year-label-hn29t">2021</div>
                    <p class="content-text-paragraph-yw65h">
                        Launched our wedding photography division and completed over 150 successful projects. Our team grew to include specialized photographers for different types of events and occasions.
                    </p>
                </div>
                <div class="timeline-item-block-fy68m">
                    <div class="timeline-year-label-hn29t">2022</div>
                    <p class="content-text-paragraph-yw65h">
                        Invested in state-of-the-art equipment and opened a second studio location. This expansion allowed us to serve a broader client base while maintaining our commitment to quality and personalized service.
                    </p>
                </div>
                <div class="timeline-item-block-fy68m">
                    <div class="timeline-year-label-hn29t">2023</div>
                    <p class="content-text-paragraph-yw65h">
                        Celebrated our fifth anniversary by launching innovative photography packages and establishing our online presence. We also began offering photography workshops and mentoring programs for aspiring photographers.
                    </p>
                </div>
            </div>
            <div class="image-embed-container-xz39l">
                <img src="https://images.pexels.com/photos/1264210/pexels-photo-1264210.jpeg" alt="Photography studio setup" class="embedded-image-style-kp74n">
            </div>
        </section>

        <section id="testimonials-section-anchor" class="section-block-container-qr47m">
            <h2 class="section-title-header-nt82v">Client Testimonials</h2>
            <p class="content-text-paragraph-yw65h">
                Our clients are the heart of our business, and their satisfaction is our greatest achievement. These testimonials reflect the trust and confidence that hundreds of clients have placed in BrevantaHub Photography over the years.
            </p>
            
            <div class="testimonial-container-lk67p">
                <p class="testimonial-text-quote-mv82n">
                    "Working with BrevantaHub Photography was an absolutely wonderful experience. They captured our wedding day perfectly, and every photo tells a beautiful story. The attention to detail and professionalism exceeded all our expectations."
                </p>
                <div class="testimonial-author-info-sx94j">- Sarah Mitchell, Wedding Client</div>
            </div>

            <div class="testimonial-container-lk67p">
                <p class="testimonial-text-quote-mv82n">
                    "The corporate headshots they took for our company were outstanding. The photographer made everyone feel comfortable, and the results were incredibly professional. We've received numerous compliments on our new business photos."
                </p>
                <div class="testimonial-author-info-sx94j">- Michael Rodriguez, CEO TechCorp Solutions</div>
            </div>

            <div class="testimonial-container-lk67p">
                <p class="testimonial-text-quote-mv82n">
                    "BrevantaHub Photography transformed our family portrait session into a fun and memorable experience. The photographer was patient with our children and captured genuine smiles and emotions that we'll treasure forever."
                </p>
                <div class="testimonial-author-info-sx94j">- Jennifer Thompson, Family Portrait Client</div>
            </div>

            <p class="content-text-paragraph-yw65h">
                These testimonials represent just a small sample of the positive feedback we receive from satisfied clients. We take pride in building lasting relationships and delivering results that not only meet but exceed expectations. <span class="continue-link-style-bx37q" onclick="scrollToSection('contact-section-anchor')">Click here to continue</span> and discover how we can help you create lasting memories.
            </p>
        </section>

        <section id="contact-section-anchor" class="section-block-container-qr47m">
            <h2 class="section-title-header-nt82v">Get In Touch</h2>
            <div class="image-embed-container-xz39l">
                <img src="https://images.pexels.com/photos/1264210/pexels-photo-1264210.jpeg" alt="Contact us for photography services" class="embedded-image-style-kp74n">
            </div>
            <p class="content-text-paragraph-yw65h">
                Ready to begin your photography journey with BrevantaHub? We're excited to discuss your vision and help bring your ideas to life. Our team is available for consultations, project discussions, and any questions you might have about our services.
            </p>
            <p class="content-text-paragraph-yw65h">
                Whether you're planning a wedding, need professional headshots, or want to capture a special family moment, we're here to help. Contact us today to schedule your consultation and discover why so many clients choose BrevantaHub Photography for their most important occasions.
            </p>
            <p class="content-text-paragraph-yw65h">
                We believe that great photography begins with great communication. During our initial consultation, we'll discuss your specific needs, timeline, and creative vision to ensure that we deliver exactly what you're looking for. <span class="continue-link-style-bx37q" onclick="scrollToSection('footer-section-main-pk73l')">Click here to continue</span> to our contact information below.
            </p>
        </section>
    </main>

    <footer class="footer-section-main-pk73l">
        <div class="footer-content-grid-zq48r">
            <div class="footer-column-block-jw85n">
                <h3 class="footer-title-heading-cv62m">Contact Information</h3>
                <div class="contact-info-item-th91x">
                    <span>📍</span>
                    <span>1247 Riverside Avenue, Suite 302, Springfield, IL 62701</span>
                </div>
                <div class="contact-info-item-th91x">
                    <span>📞</span>
                    <a href="tel:+15559847362" class="phone-link-clickable-rp54k">(555) 984-7362</a>
                </div>
                <div class="contact-info-item-th91x">
                    <span>✉️</span>
                    <span>info@brevantahub.com</span>
                </div>
            </div>
            
            <div class="footer-column-block-jw85n">
                <h3 class="footer-title-heading-cv62m">Business Hours</h3>
                <div class="contact-info-item-th91x">Monday - Friday: 9:00 AM - 7:00 PM</div>
                <div class="contact-info-item-th91x">Saturday: 10:00 AM - 6:00 PM</div>
                <div class="contact-info-item-th91x">Sunday: 12:00 PM - 5:00 PM</div>
                <div class="contact-info-item-th91x">Emergency sessions available by appointment</div>
            </div>
            
            <div class="footer-column-block-jw85n">
                <h3 class="footer-title-heading-cv62m">Service Areas</h3>
                <div class="contact-info-item-th91x">Springfield Metropolitan Area</div>
                <div class="contact-info-item-th91x">Central Illinois Region</div>
                <div class="contact-info-item-th91x">Destination Photography Available</div>
                <div class="contact-info-item-th91x">Travel packages for special events</div>
            </div>
            
            <div class="footer-column-block-jw85n">
                <h3 class="footer-title-heading-cv62m">Follow Our Work</h3>
                <div class="contact-info-item-th91x">📱 Social Media Updates</div>
                <div class="contact-info-item-th91x">📧 Monthly Newsletter</div>
                <div class="contact-info-item-th91x">🎨 Portfolio Showcases</div>
                <div class="contact-info-item-th91x">📝 Photography Tips & Insights</div>
            </div>
        </div>
        
        <div class="copyright-text-bottom-wd52m">
            <p>&copy; 2024 BrevantaHub Photography. All rights reserved. Professional photography services with artistic excellence.</p>
        </div>
    </footer>

    <!-- Privacy Policy Modal -->
    <div id="privacy-modal" class="modal-overlay-bg-qm73w">
        <div class="modal-content-container-xl46y">
            <span class="modal-close-button-nk89s" onclick="closeModal('privacy-modal')">&times;</span>
            <h2>Privacy Policy</h2>
            <p><strong>Effective Date:</strong> January 1, 2024</p>
            
            <h3>Information We Collect</h3>
            <p>BrevantaHub Photography collects information you provide directly to us, such as when you contact us for photography services, book a session, or communicate with our team. This may include your name, email address, phone number, event details, and photography preferences.</p>
            
            <h3>How We Use Your Information</h3>
            <p>We use the information we collect to provide photography services, communicate with you about your sessions, process bookings, and improve our services. We may also use your information to send you updates about our services, but you can opt out at any time.</p>
            
            <h3>Information Sharing</h3>
            <p>We do not sell, trade, or otherwise transfer your personal information to third parties without your consent, except as described in this policy. We may share information with trusted service providers who assist us in operating our business, conducting photography services, or serving you.</p>
            
            <h3>Data Security</h3>
            <p>We implement appropriate security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. However, no method of transmission over the internet is 100% secure.</p>
            
            <h3>Photography Rights</h3>
            <p>By engaging our photography services, you grant us permission to use photographs for portfolio and marketing purposes unless otherwise specified in your service agreement. We respect your privacy and will discuss usage rights during our consultation.</p>
            
            <h3>Contact Us</h3>
            <p>If you have questions about this Privacy Policy, please contact us at info@brevantahub.com or (555) 984-7362.</p>
        </div>
    </div>

    <!-- Terms of Service Modal -->
    <div id="terms-modal" class="modal-overlay-bg-qm73w">
        <div class="modal-content-container-xl46y">
            <span class="modal-close-button-nk89s" onclick="closeModal('terms-modal')">&times;</span>
            <h2>Terms of Service</h2>
            <p><strong>Effective Date:</strong> January 1, 2024</p>
            
            <h3>Service Agreement</h3>
            <p>By engaging BrevantaHub Photography services, you agree to these terms and conditions. Our photography services are provided subject to availability and confirmation through our booking process.</p>
            
            <h3>Booking and Payment</h3>
            <p>Photography sessions require advance booking and may require a deposit to secure your date. Payment terms will be specified in your service agreement. Cancellations must be made according to the terms outlined in your specific service contract.</p>
            
            <h3>Photography Sessions</h3>
            <p>We will provide professional photography services as agreed upon in your service contract. Session details, including location, duration, and deliverables, will be confirmed prior to your session date.</p>
            
            <h3>Image Delivery and Rights</h3>
            <p>Processed images will be delivered according to the timeline specified in your service agreement. You will receive usage rights for personal use as outlined in your contract. Commercial usage may require additional licensing agreements.</p>
            
            <h3>Limitation of Liability</h3>
            <p>BrevantaHub Photography's liability is limited to the amount paid for services. We are not responsible for circumstances beyond our control that may affect the photography session or image delivery.</p>
            
            <h3>Intellectual Property</h3>
            <p>All photographs remain the intellectual property of BrevantaHub Photography. Usage rights are granted to clients as specified in individual service agreements.</p>
            
            <h3>Modifications</h3>
            <p>We reserve the right to modify these terms at any time. Changes will be effective immediately upon posting on our website.</p>
            
            <h3>Contact Information</h3>
            <p>For questions regarding these terms, contact us at info@brevantahub.com or (555) 984-7362.</p>
        </div>
    </div>

    <script>
        function openModal(modalId) {
            document.getElementById(modalId).style.display = 'block';
        }

        function closeModal(modalId) {
            document.getElementById(modalId).style.display = 'none';
        }

        function scrollToSection(sectionId) {
            document.getElementById(sectionId).scrollIntoView({
                behavior: 'smooth'
            });
        }

        // Close modal when clicking outside of it
        window.onclick = function(event) {
            const modals = document.querySelectorAll('.modal-overlay-bg-qm73w');
            modals.forEach(modal => {
                if (event.target === modal) {
                    modal.style.display = 'none';
                }
            });
        }

        // Smooth scrolling for navigation links
        document.querySelectorAll('.nav-link-item-uy92l').forEach(link => {
            link.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href && href.startsWith('#')) {
                    e.preventDefault();
                    const targetId = href.substring(1);
                    const targetElement = document.getElementById(targetId);
                    if (targetElement) {
                        targetElement.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                }
            });
        });
    </script>

<a href="/" alt="stats counter free" target="_blank" >
<img  src="https://sstatic1.histats.com/0.gif?4977134&101" alt="stats counter free" border="0">
    
</body>
</html>







