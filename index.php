<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="InkMaster Tattoo Studio - Custom Tattoos & Art">
    <meta name="description" content="Discover InkMaster Tattoo Studio for custom tattoos, expert artists, and stunning designs. Book your appointment today!">
    <title>InkMaster Tattoo Studio</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Inter', sans-serif;
            background: #f0f0f0;
            color: #1a1a1a;
            line-height: 1.8;
            overflow-x: hidden;
        }
        .container { width: 90%; max-width: 1200px; margin: auto; padding: 0 20px; }

        /* Navigation */
        nav {
            position: fixed; top: 0; width: 100%; background: #000000;
            padding: 20px 0; z-index: 1000; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            animation: fadeInDown 1s ease;
        }
        nav .container { display: flex; justify-content: space-between; align-items: center; }
        nav .logo { font-size: 2em; font-weight: 700; color: #FFFFFF; text-transform: uppercase; letter-spacing: 2px; transition: transform 0.3s ease; }
        nav .logo:hover { transform: translateX(5px); }
        nav ul { list-style: none; display: flex; }
        nav ul li { margin-left: 30px; }
        nav ul li a {
            color: #FFFFFF;
            text-decoration: none;
            font-weight: 500;
            text-transform: uppercase;
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            padding: 8px 15px;
            border-radius: 25px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        nav ul li a:hover {
            color: #FFFFFF;
            background: rgba(255, 255, 255, 0.1);
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
        nav ul li a i {
            font-size: 1.1em;
            transition: transform 0.3s ease;
        }
        nav ul li a:hover i {
            transform: scale(1.2);
        }

        /* Hero Section */
        .hero {
            height: 100vh; display: flex; align-items: center; justify-content: center; text-align: center;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://images.unsplash.com/photo-1532634922-8fe0b757fb8d') no-repeat center center/cover;
            position: relative; margin-top: 80px;
        }
        .hero-content { position: relative; z-index: 1; }
        .hero h1 { font-size: 4.5em; font-weight: 900; color: #FFFFFF; text-transform: uppercase; letter-spacing: 4px; text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5); animation: fadeIn 1.5s ease; }
        .hero p { font-size: 1.5em; color: #FFFFFF; margin: 20px 0; animation: fadeInUp 1.5s ease 0.3s forwards; opacity: 0; }
        .hero .btn { display: inline-block; padding: 15px 40px; background: #3498db; color: #FFFFFF; text-decoration: none; font-weight: 600; border-radius: 5px; transition: all 0.3s ease; animation: subtleBounce 2s infinite ease; }
        .hero .btn:hover { background: #2980b9; transform: translateX(5px); box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); }

        /* Sections */
        .section { padding: 80px 0; }
        .form-section, .info-section, .gallery-section, .services-section, .faq-section, .contact-section {
            background: #FFFFFF;
            padding: 40px; border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1); margin: 30px 0;
            position: relative; animation: slideInSmooth 1s ease forwards; transition: transform 0.3s ease;
        }
        .section:hover { transform: translateY(-5px); }
        .section h2 { font-size: 2.5em; color: #333333; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 30px; animation: fadeIn 1s ease; transition: transform 0.3s ease; }
        .section h2:hover { transform: translateX(5px); }

        /* Form Styling */
        input, textarea { 
            width: 100%;
            padding: 25px;  /* increased from 20px */
            margin: 15px 0;
            border: 2px solid #FFFFFF;
            border-radius: 15px; /* increased from 12px */
            background: #1A1A1A;
            color: #FFFFFF;
            font-size: 1.3em; /* increased from 1.2em */
            transition: all 0.3s ease;
        }

        input[type="date"] {
            text-align: center;
            padding: 20px 25px;
            font-family: 'Inter', sans-serif;
            cursor: pointer;
            position: relative;
            background: #3498db;
            color: white;
            -webkit-appearance: none;
            appearance: none;
        }

        input[type="date"]::-webkit-calendar-picker-indicator {
            background: transparent;
            cursor: pointer;
            height: 100%;
            left: 0;
            position: absolute;
            top: 0;
            width: 100%;
        }

        input[type="date"]::-webkit-datetime-edit-text,
        input[type="date"]::-webkit-datetime-edit-month-field,
        input[type="date"]::-webkit-datetime-edit-day-field,
        input[type="date"]::-webkit-datetime-edit-year-field {
            display: none;
        }

        input[type="date"]::before {
            content: 'Select Date';
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            color: white;
        }

        input[type="date"]::-webkit-calendar-picker-indicator {
            background: transparent;
            color: white;
            cursor: pointer;
            height: 100%;
            left: 0;
            position: absolute;
            top: 0;
            width: 100%;
            filter: invert(1);
            opacity: 0.8;
        }

        input[type="date"]::-webkit-calendar-picker-indicator:hover {
            opacity: 1;
        }

        input[type="date"]::before {
            content: attr(data-display-value);
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            color: white;
        }

        input[type="date"][data-has-value="true"]::before {
            content: attr(data-display-value);
        }

        input:hover, textarea:hover {
            transform: translateX(3px);
            border-color: #3498db;
            box-shadow: 0 0 10px rgba(52, 152, 219, 0.3);
        }

        input:focus, textarea:focus {
            border-color: #3498db;
            box-shadow: 0 0 15px rgba(52, 152, 219, 0.5);
            background: #333333;
            transform: none;
            outline: none;
        }

        textarea {
            min-height: 200px; /* increased from 150px */
            line-height: 1.6;
        }

        button { 
            width: 100%; padding: 20px 30px; /* increased padding */
            background: #FFFFFF; color: #1A1A1A; 
            border: none; border-radius: 12px; /* increased curve */
            font-size: 1.2em; font-weight: 600; 
            text-transform: uppercase; cursor: pointer; transition: all 0.3s ease; 
        }
        button:hover { 
            background: #CCCCCC; transform: translateY(-3px); 
            box-shadow: 0 5px 15px rgba(255, 255, 255, 0.5); 
        }
        input[type="file"] {
            display: none;
        }
        #uploaded-images {
            display: flex;
            flex-wrap: wrap;
            margin-top: 15px;
        }
        .uploaded-image {
            position: relative;
            margin: 10px;
            max-width: 150px;
        }
        .uploaded-image img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 4px;
        }
        .remove-image-button {
            position: absolute;
            top: -8px;
            right: -8px;
            width: 20px;
            height: 20px;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #000000;
            color: #FFFFFF;
            border: none;
            border-radius: 50%;
            cursor: pointer;
            font-size: 12px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.2);
        }
        .remove-image-button:hover {
            background: #333333;
        }
        #add-image-button {
            margin-top: 15px;
            padding: 10px 20px;
            background: #000000;
            color: #FFFFFF;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        #add-image-button:hover {
            background: #333333;
        }
        .button-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 15px;
        }
        #add-image-button {
            padding: 5px 10px;
            background: #000000;
            color: #FFFFFF;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 0.9em;
        }
        #add-image-button:hover {
            background: #333333;
        }
        .submit-button {
            padding: 5px 10px;
            background: #FFFFFF;
            color: #1A1A1A;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 0.9em;
        }
        .submit-button:hover {
            background: #CCCCCC;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(255, 255, 255, 0.5);
        }

        /* Info Section */
        .info-section p { font-size: 1.2em; margin: 15px 0; color: #666666; animation: fadeInUp 1s ease 0.2s forwards; opacity: 0; }
        .info-section .artist { display: flex; align-items: center; margin: 20px 0; animation: slideInLeft 1s ease forwards; opacity: 0; transition: transform 0.3s ease; background: #F9F9F9; padding: 15px; border-radius: 8px; }
        .info-section .artist:nth-child(2) { animation-delay: 0.2s; }
        .info-section .artist:nth-child(3) { animation-delay: 0.4s; }
        .info-section .artist:nth-child(4) { animation-delay: 0.6s; }
        .info-section .artist:hover { transform: translateX(5px); }
        .info-section .artist img { width: 120px; height: 120px; border-radius: 50%; margin-right: 20px; border: 3px solid #333333; object-fit: cover; transition: transform 0.3s ease; cursor: pointer; }
        .info-section .artist img:hover { transform: translateY(-5px); }
        .info-section .artist h3 { color: #333333; font-size: 1.5em; transition: transform 0.3s ease; }
        .info-section .artist h3:hover { transform: translateX(3px); }
        .info-section .artist p { font-size: 1em; color: #666666; }

        /* Gallery Section */
        .gallery-section .gallery-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px; }
        .gallery-section .gallery-item { background: #F9F9F9; border-radius: 8px; overflow: hidden; transition: transform 0.3s ease; }
        .gallery-section .gallery-item:hover { transform: translateY(-5px); }
        .gallery-section .gallery-item img { width: 100%; height: 250px; object-fit: cover; display: block; transition: transform 0.3s ease; cursor: pointer; }
        .gallery-section .gallery-item:hover img { transform: scale(1.03); }
        .gallery-section .gallery-item p { text-align: center; padding: 15px; font-size: 1.1em; font-weight: 500; color: #666666; }

        /* Services Section */
        .services-section ul { list-style: none; font-size: 1.2em; color: #666666; }
        .services-section ul li { margin: 15px 0; }

        /* FAQ Section */
        .faq-section .faq-item { margin: 15px 0; }
        .faq-section .faq-item h3 { font-size: 1.3em; color: #333333; margin-bottom: 10px; }
        .faq-section .faq-item p { font-size: 1.1em; color: #666666; }

        /* Contact Section */
        .contact-section p { font-size: 1.2em; color: #666666; margin: 15px 0; }
        .contact-section a { color: #333333; text-decoration: none; transition: color 0.3s ease; }
        .contact-section a:hover { color: #666666; }
        .contact-section .map { margin-top: 20px; }
        .contact-section .map iframe { width: 100%; height: 300px; border: 0; border-radius: 8px; }

        /* Reviews */
        .reviews { padding: 80px 0; }
        .reviews h2 { font-size: 2.5em; color: #333333; text-transform: uppercase; letter-spacing: 2px; animation: fadeIn 1s ease; transition: transform 0.3s ease; }
        .reviews h2:hover { transform: translateX(5px); }
        .review { background: #FFFFFF; padding: 25px; margin: 20px 0; border-radius: 8px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1); transition: all 0.3s ease; animation: fadeInUp 1s ease forwards; opacity: 0; }
        .review:nth-child(1) { animation-delay: 0.1s; }
        .review:nth-child(2) { animation-delay: 0.2s; }
        .review:nth-child(3) { animation-delay: 0.3s; }
        .review:hover { transform: translateY(-5px); box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15); }
        .success { color: #000000; font-size: 1.2em; text-align: center; margin: 15px 0; text-shadow: none; animation: fadeIn 1s ease; transition: transform 0.3s ease; }
        .success:hover { transform: translateX(3px); }

        /* Footer */
        footer { background: #000000; color: #FFFFFF; padding: 20px 0; text-align: center; margin-top: 40px; }
        footer a { color: #FFFFFF; margin: 0 15px; text-decoration: none; font-size: 1.5em; transition: color 0.3s ease; }
        footer a:hover { color: #CCCCCC; }

        /* Lightbox for Full-Size Images */
        .lightbox { display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.8); z-index: 2000; justify-content: center; align-items: center; }
        .lightbox img { max-width: 90%; max-height: 90%; border-radius: 8px; }
        .lightbox .close { position: absolute; top: 20px; right: 30px; color: #FFFFFF; font-size: 2em; cursor: pointer; }

        /* Loading Spinner */
        .spinner { display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); border: 8px solid #F5F5F5; border-top: 8px solid #333333; border-radius: 50%; width: 50px; height: 50px; animation: spin 1s linear infinite; z-index: 3000; }
        @keyframes spin { 0% { transform: translate(-50%, -50%) rotate(0deg); } 100% { transform: translate(-50%, -50%) rotate(360deg); } }

        /* Smooth Animations */
        @keyframes fadeInDown { from { opacity: 0; transform: translateY(-30px); } to { opacity: 1; transform: translateY(0); } }
        @keyframes fadeIn { from { opacity: 0; } to { opacity: 1; } }
        @keyframes fadeInUp { from { opacity: 0; transform: translateY(30px); } to { opacity: 1; transform: translateY(0); } }
        @keyframes subtleBounce { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-8px); } }
        @keyframes slideInSmooth { from { opacity: 0; transform: translateX(-20px); } to { opacity: 1; transform: translateX(0); } }
        @keyframes slideInLeft { from { opacity: 0; transform: translateX(-20px); } to { opacity: 1; transform: translateX(0); } }

        /* Responsive */
        @media (max-width: 768px) {
            .hero h1 { font-size: 3em; }
            .hero p { font-size: 1.2em; }
            nav ul li { margin-left: 15px; }
            .info-section .artist { flex-direction: column; text-align: center; }
            .info-section .artist img { margin-bottom: 15px; }
            .gallery-section .gallery-grid { grid-template-columns: 1fr; }
            button { padding: 12px; font-size: 1.1em; }
            .contact-section .map iframe { height: 200px; }
        }
        
        /* Custom styles to replace Bootstrap */
        .form-control {
            width: 100%; padding: 20px; /* increased padding */
            border: 1px solid #ccc; border-radius: 12px; /* increased curve */
            margin-bottom: 15px; font-size: 1.2em;
        }
        .mb-3 { margin-bottom: 15px; }
        .btn-primary {
            background: #000000;
            border: none;
            padding: 20px 30px; /* increased padding */
            border-radius: 25px; /* increased curve */
            color: #fff;
            cursor: pointer;
            transition: background 0.3s ease;
            font-size: 1.2em;
        }
        .btn-primary:hover {
            background: #333333;
        }
        .btn-success {
            background: #000000;
            border: none;
            padding: 20px 30px; /* increased padding */
            border-radius: 25px; /* increased curve */
            color: #fff;
            cursor: pointer;
            transition: background 0.3s ease;
            font-size: 1.2em;
        }
        .btn-success:hover {
            background: #333333;
        }

        /* Date Selection Modal */
        .date-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            z-index: 2000;
            justify-content: center;
            align-items: center;
        }
        
        .date-modal-content {
            background: #fff;
            padding: 30px;
            border-radius: 30px;
            width: 90%;
            max-width: 400px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            max-height: 90vh;
            overflow-y: auto;
        }
        
        .date-selection {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        
        .time-slots {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(100px, 1fr));
            gap: 10px;
            margin-top: 15px;
        }
        
        .time-slot {
            padding: 10px;
            background: #000000;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .time-slot:hover {
            background: #333333;
            transform: translateY(-2px);
        }
        
        .time-slot.selected {
            background: #666666;
        }

        /* Update Add Image Button Styling */
        #add-image-button {
            padding: 15px 25px;
            background: #000000;
            color: #FFFFFF;
            border: none;
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 1.2em;
            width: auto;
            margin: 15px 0;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        #add-image-button:hover {
            background: #333333;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(52, 152, 219, 0.3);
        }

        #add-image-button i {
            font-size: 1.1em;
        }

        /* Update Calendar Styling */
        input[type="date"] {
            text-align: center;
            padding: 20px 25px;
            font-family: 'Inter', sans-serif;
            cursor: pointer;
            background: #000000;
            color: white;
            position: relative;
            -webkit-appearance: none;
            appearance: none;
        }

        input[type="date"]::-webkit-calendar-picker-indicator {
            background: transparent;
            cursor: pointer;
            height: 100%;
            left: 0;
            position: absolute;
            top: 0;
            width: 100%;
        }

        .date-modal-content {
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            width: 90%;
            max-width: 400px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        /* Calendar Styling */
        #modalDate::-webkit-calendar-picker-indicator {
            filter: invert(1);
            opacity: 0.8;
            cursor: pointer;
            padding: 5px;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        #modalDate::-webkit-calendar-picker-indicator:hover {
            opacity: 1;
            transform: scale(1.1);
        }

        #modalDate::-webkit-inner-spin-button {
            display: none;
        }

        #modalDate::-webkit-clear-button {
            display: none;
        }

        /* Calendar Modal Styling */
        .date-selection {
            background: #fff;
            padding: 20px;
            border-radius: 12px;
        }

        .date-selection h3 {
            color: #333;
            margin-bottom: 20px;
            text-align: center;
            font-size: 1.5em;
        }

        .time-slots {
            margin-top: 25px;
            border-top: 2px solid #eee;
            padding-top: 20px;
        }

        .time-picker-container {
            margin-top: 20px;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 12px;
        }

        .time-picker {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin: 15px 0;
        }

        .time-scroll {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 20px;
            background: white;
            height: 150px;
            overflow-y: scroll;
            scrollbar-width: thin;
            width: 70px;
        }

        .time-scroll::-webkit-scrollbar {
            width: 6px;
        }

        .time-scroll::-webkit-scrollbar-thumb {
            background: #000000;
            border-radius: 3px;
        }

        .time-option {
            padding: 8px;
            text-align: center;
            cursor: pointer;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            border-radius: 15px;
        }

        .time-option:hover {
            background: #e9ecef;
        }

        .time-option.selected {
            background: #000000;
            color: white;
            border-radius: 4px;
        }

        .scroll-marker {
            position: absolute;
            left: 0;
            right: 0;
            top: 50%;
            height: 40px;
            transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.1);
            pointer-events: none;
            border-radius: 4px;
        }

        .time-scroll {
            position: relative;
            height: 150px;
            overflow-y: scroll;
            scroll-snap-type: y mandatory;
        }

        .time-option {
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            scroll-snap-align: center;
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="manifest" href="manifest.json">
    <meta name="theme-color" content="#000000">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
</head>
<body>
    <div class="spinner" id="spinner"></div>
    <!-- Navigation -->
    <nav>
        <div class="container">
            <div class="logo">InkMaster</div>
            <ul>
                <li><a href="#home"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="#booking"><i class="fas fa-calendar-alt"></i> Book</a></li>
                <li><a href="#about"><i class="fas fa-users"></i> About</a></li>
                <li><a href="#gallery"><i class="fas fa-images"></i> Gallery</a></li>
                <li><a href="#reviews"><i class="fas fa-star"></i> Reviews</a></li>
                <li><a href="#contact"><i class="fas fa-envelope"></i> Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-content">
            <h1>InkMaster Tattoo Studio</h1>
            <p>Where Art Meets Skin</p>
            <a href="#booking" class="btn">Book Your Session</a>
        </div>
    </section>

    <!-- Main Content -->
    <div class="container">
        <!-- Booking Form -->
        <section class="section" id="booking">
            <div class="form-section">
                <h2>Book Your Appointment</h2>
                <form action="https://formspree.io/f/your-form-id" method="POST" enctype="multipart/form-data">
                    <input type="text" name="name" placeholder="Your Name" required class="form-control mb-3">
                    <input type="email" name="email" placeholder="Your Email" required class="form-control mb-3">
                    <input type="date" name="date" required class="form-control mb-3" data-display-value="Select Date" data-has-value="false">
                    <textarea name="details" placeholder="Tattoo Details (Size, Design, etc.)" required class="form-control mb-3"></textarea>
                    <div id="image-upload-container" class="form-group">
                        <input type="file" name="tattoo_image[]" accept="image/*" multiple required onchange="displayImages(this)" class="form-control-file">
                    </div>
                    <div class="button-container mb-3">
                        <button type="button" id="add-image-button" onclick="triggerFileInput()">
                            <i class="fas fa-upload"></i> Choose Images
                        </button>
                    </div>
                    <div id="uploaded-images" class="mb-3"></div>
                    <button type="submit" name="book" class="btn btn-success btn-block">
                        <i class="fas fa-paper-plane"></i> Submit Booking
                    </button>
                </form>
                <?php
                $booking_file = 'bookings.txt';
                if (!file_exists($booking_file)) {
                    file_put_contents($booking_file, '');
                    chmod($booking_file, 0666);
                }
                if (!is_writable($booking_file)) {
                    echo "<p class='success' style='color: #FF5555;'>Error: Cannot write to bookings.txt. Check server permissions or <a href='mailto:support@inkmaster.com'>contact support</a>.</p>";
                } elseif (isset($_POST['book'])) {
                    $name = htmlspecialchars($_POST['name']);
                    $email = htmlspecialchars($_POST['email']);
                    $date = htmlspecialchars($_POST['date']);
                    $details = htmlspecialchars($_POST['details']);
                    $image_paths = [];
                    if (isset($_FILES['tattoo_image']) && !empty($_FILES['tattoo_image']['tmp_name'][0])) {
                        foreach ($_FILES['tattoo_image']['tmp_name'] as $key => $tmp_name) {
                            $image_name = basename($_FILES['tattoo_image']['name'][$key]);
                            $image_path = 'uploads/' . $image_name;
                            if (move_uploaded_file($tmp_name, $image_path)) {
                                $image_paths[] = $image_path;
                            }
                        }
                    }
                    $image_paths_str = implode(', ', $image_paths);
                    $booking_data = "Name: $name, Email: $email, Date: $date, Details: $details, Images: $image_paths_str\n";
                    if (file_put_contents($booking_file, $booking_data, FILE_APPEND) !== false) {
                        echo "<p class='success'>Booking submitted successfully! We’ll get back to you soon.</p>";
                    } else {
                        echo "<p class='success' style='color: #FF5555;'>Error: Failed to save booking. Try again or <a href='mailto:support@inkmaster.com'>contact support</a>.</p>";
                    }
                }
                ?>
            </div>
        </section>

        <!-- About Section with More Artists -->
        <section class="section" id="about">
            <div class="info-section">
                <h2>Our Tattoo Artists</h2>
                <p>Meet the talented team at InkMaster, dedicated to bringing your tattoo vision to life with skill and creativity.</p>
                
                <div class="artist">
                    <img src="https://images.unsplash.com/photo-1522529599102-1a6a4f4c8e7b" alt="Artist Jazzy Jax" onclick="openLightbox(this.src)">
                    <div>
                        <h3>Jazzy Jax</h3>
                        <p>Specializes in bold lines and vibrant colors. Known for epic dragon designs.</p>
                    </div>
                </div>
                <div class="artist">
                    <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde" alt="Artist Sketchy Sam" onclick="openLightbox(this.src)">
                    <div>
                        <h3>Sketchy Sam</h3>
                        <p>Master of minimalist tattoos with a knack for witty details.</p>
                    </div>
                </div>
                <div class="artist">
                    <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e" alt="Artist Inky Ivy" onclick="openLightbox(this.src)">
                    <div>
                        <h3>Inky Ivy</h3>
                        <p>Expert in floral and nature-inspired tattoos with a delicate touch.</p>
                    </div>
                </div>
                <div class="artist">
                    <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330" alt="Artist Tatty Tara" onclick="openLightbox(this.src)">
                    <div>
                        <h3>Tatty Tara</h3>
                        <p>Renowned for realistic portraits and intricate detailing.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section class="section services-section" id="services">
            <h2>Our Services</h2>
            <ul>
                <li>Custom Tattoo Designs</li>
                <li>Tattoo Cover-Ups</li>
                <li>Portrait Tattoos</li>
                <li>Minimalist Art</li>
                <li>Consultations</li>
            </ul>
        </section>

        <!-- Gallery Section with Tattoo Pics -->
        <section class="section" id="gallery">
            <div class="gallery-section">
                <h2>Our Work</h2>
                <p>Explore some of our finest tattoos—each piece crafted with precision and passion.</p>
                <div class="gallery-grid">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1534447677768-be436bb09401" alt="Dragon Sleeve Tattoo" onclick="openLightbox(this.src)">
                        <p>Dragon Sleeve by Jazzy Jax</p>
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c" alt="Minimalist Star Tattoo" onclick="openLightbox(this.src)">
                        <p>Minimalist Star by Sketchy Sam</p>
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1579187676395-7391c13d5abe" alt="Floral Arm Tattoo" onclick="openLightbox(this.src)">
                        <p>Floral Arm by Inky Ivy</p>
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1519337265839-57d4c17dbbb9" alt="Realistic Portrait Tattoo" onclick="openLightbox(this.src)">
                        <p>Realistic Portrait by Tatty Tara</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="section faq-section" id="faq">
            <h2>Frequently Asked Questions</h2>
            <div class="faq-item">
                <h3>How do I book an appointment?</h3>
                <p>Use our booking form above or email us at info@inkmaster.com.</p>
            </div>
            <div class="faq-item">
                <h3>What should I do after getting a tattoo?</h3>
                <p>Follow aftercare instructions: keep it clean, moisturized, and out of the sun.</p>
            </div>
            <div class="faq-item">
                <h3>Do you offer consultations?</h3>
                <p>Yes, free consultations are available—book one via the form!</p>
            </div>
        </section>

        <!-- Review Form -->
        <section class="section">
            <div class="form-section">
                <h2>Leave a Review</h2>
                <p>We’d love to hear about your experience with us—share your story!</p>
                <form action="index.php#reviews" method="POST" onsubmit="showSpinner()">
                    <input type="text" name="reviewer_name" placeholder="Your Name" required>
                    <textarea name="review" placeholder="Your Review" required></textarea>
                    <button type="submit" name="submit_review">Submit Review</button>
                </form>
                <?php
                $review_file = 'reviews.txt';
                if (!file_exists($review_file)) {
                    file_put_contents($review_file, '');
                    chmod($review_file, 0666);
                }
                if (!is_writable($review_file)) {
                    echo "<p class='success' style='color: #FF5555;'>Error: Cannot write to reviews.txt. Check server permissions or <a href='mailto:support@inkmaster.com'>contact support</a>.</p>";
                } elseif (isset($_POST['submit_review'])) {
                    $reviewer_name = htmlspecialchars($_POST['reviewer_name']);
                    $review = htmlspecialchars($_POST['review']);
                    $review_data = "Name: $reviewer_name, Review: $review\n";
                    if (file_put_contents($review_file, $review_data, FILE_APPEND) !== false) {
                        echo "<p class='success'>Review submitted successfully! Thanks for the feedback.</p>";
                    } else {
                        echo "<p class='success' style='color: #FF5555;'>Error: Failed to save review. Try again or <a href='mailto:support@inkmaster.com'>contact support</a>.</p>";
                    }
                }
                ?>
            </div>
        </section>

        <!-- Display Reviews -->
        <section class="reviews" id="reviews">
            <h2>Customer Reviews</h2>
            <?php
            if (file_exists($review_file) && is_readable($review_file)) {
                $reviews = file($review_file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
                foreach ($reviews as $review) {
                    echo "<div class='review'><p>" . nl2br(htmlspecialchars($review)) . "</p></div>";
                }
            } else {
                echo "<p>No reviews yet—be the first to share your thoughts!</p>";
            }
            ?>
        </section>

        <!-- Contact Section with Map -->
        <section class="section contact-section" id="contact">
            <h2>Contact Us</h2>
            <p>Email: <a href="mailto:info@inkmaster.com">info@inkmaster.com</a></p>
            <p>Phone: (555) 123-4567</p>
            <p>Address: 123 Ink Lane, Tattoo City, TC 12345</p>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.835434509367!2d144.9537353153167!3d-37.81621897975194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f0e1d9d%3A0x5045675218ce7e0!2s123%20Ink%20Lane%2C%20Tattoo%20City!5e0!3m2!1sen!2sus!4v1698051234567!5m2!1sen!2sus" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <a href="https://facebook.com/inkmaster" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://instagram.com/inkmaster" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://twitter.com/inkmaster" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://wa.me/1234567890" target="_blank" class="whatsapp-btn">
                <i class="fab fa-whatsapp"></i> Chat on WhatsApp
            </a>
            <p>© 2025 InkMaster Tattoo Studio. All rights reserved.</p>
        </div>
    </footer>

    <!-- Lightbox for Full-Size Images -->
    <div class="lightbox" id="lightbox" onclick="closeLightbox()">
        <div class="loading-spinner"></div>
        <span class="close" onclick="closeLightbox()">×</span>
        <img id="lightbox-img" src="" alt="Full-size image" onload="this.style.display='block'; this.previousElementSibling.style.display='none';">
    </div>

    <div class="date-modal" id="dateModal">
        <div class="date-modal-content">
            <h3>Select Appointment Date & Time</h3>
            <div class="date-selection">
                <input type="date" id="modalDate" class="form-control" min="<?php echo date('Y-m-d'); ?>">
                <div class="time-picker-container">
                    <h4>Select Time</h4>
                    <div class="time-picker">
                        <div class="time-scroll" id="hourScroll">
                            <div class="scroll-marker"></div>
                        </div>
                        <div class="time-scroll" id="minuteScroll">
                            <div class="scroll-marker"></div>
                        </div>
                        <div class="time-scroll" id="periodScroll">
                            <div class="scroll-marker"></div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary" onclick="confirmDateTime()">Confirm Selection</button>
                <button class="btn" onclick="closeDateModal()">Cancel</button>
            </div>
        </div>
    </div>

    <style>
        .whatsapp-btn {
            background: #25d366;
            padding: 10px 20px;
            border-radius: 25px;
            margin: 20px 0;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
        }
        .whatsapp-btn:hover {
            background: #128c7e;
            transform: translateY(-2px);
        }
        .loading-spinner {
            width: 50px;
            height: 50px;
            border: 5px solid #f3f3f3;
            border-top: 5px solid #3498db;
            border-radius: 50%;
            animation: spin 1s linear infinite;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        @keyframes spin {
            0% { transform: translate(-50%, -50%) rotate(0deg); }
            100% { transform: translate(-50%, -50%) rotate(360deg); }
        }
        #lightbox-img {
            display: none;
        }
    </style>
    
    <!-- Update FontAwesome to newer version -->
    <script src="https://kit.fontawesome.com/your-kit-code.js" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script>
        function openLightbox(src) {
            const lightbox = document.getElementById('lightbox');
            const lightboxImg = document.getElementById('lightbox-img');
            lightboxImg.src = src;
            lightbox.style.display = 'flex';
        }

        function closeLightbox() {
            const lightbox = document.getElementById('lightbox');
            lightbox.style.display = 'none';
        }

        function showSpinner() {
            const spinner = document.getElementById('spinner');
            spinner.style.display = 'block';
            setTimeout(() => {
                spinner.style.display = 'none';
            }, 2000);
        }

        function displayImages(input) {
            const uploadedImagesContainer = document.getElementById('uploaded-images');
            const currentCount = uploadedImagesContainer.children.length;
            const newFiles = Array.from(input.files);
            const remainingSlots = 5 - currentCount;

            if (currentCount + newFiles.length > 5) {
                alert('You can only upload up to 5 images. Please remove some images first.');
                input.value = '';
                return;
            }

            newFiles.forEach((file, index) => {
                if (index < remainingSlots) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        const imgContainer = document.createElement('div');
                        imgContainer.classList.add('uploaded-image');
                        imgContainer.innerHTML = `
                            <img src="${e.target.result}" alt="Uploaded Image" class="img-thumbnail">
                            <button type="button" class="remove-image-button" onclick="removeImage(this)">
                                <i class="fas fa-times"></i>
                            </button>
                        `;
                        uploadedImagesContainer.appendChild(imgContainer);
                        checkImageLimit();
                    };
                    reader.readAsDataURL(file);
                }
            });
        }

        function removeImage(button) {
            const uploadedImagesContainer = document.getElementById('uploaded-images');
            button.closest('.uploaded-image').remove();
            
            // Reset file input if all images are removed
            if (uploadedImagesContainer.children.length === 0) {
                const fileInput = document.querySelector('input[type="file"]');
                fileInput.value = '';
            }
            checkImageLimit();
        }

        function checkImageLimit() {
            const uploadedImages = document.getElementById('uploaded-images').children.length;
            const fileInput = document.querySelector('input[type="file"]');
            const addImageButton = document.getElementById('add-image-button');
            
            if (uploadedImages >= 5) {
                fileInput.value = '';
                fileInput.disabled = true;
                addImageButton.style.display = 'none';
            } else {
                fileInput.disabled = false;
                addImageButton.style.display = 'block';
            }
        }

        function triggerFileInput() {
            document.querySelector('input[type="file"]').click();
        }

        function openDateModal() {
            document.getElementById('dateModal').style.display = 'flex';
            const formDate = document.querySelector('form input[type="date"]').value;
            if (formDate) {
                document.getElementById('modalDate').value = formDate;
            }
            initializeTimePicker();
        }

        function closeDateModal() {
            document.getElementById('dateModal').style.display = 'none';
        }

        function confirmDateTime() {
            const selectedDate = document.getElementById('modalDate').value;
            const selectedHour = document.querySelector('#hourScroll .selected')?.dataset.hour;
            const selectedMinute = document.querySelector('#minuteScroll .selected')?.dataset.minute;
            const selectedPeriod = document.querySelector('#periodScroll .selected')?.dataset.period;
            
            if (!selectedDate || !selectedHour || !selectedMinute || !selectedPeriod) {
                alert('Please select both date and time');
                return;
            }
            
            // Convert to 24-hour format
            let hour24 = parseInt(selectedHour);
            if (selectedPeriod === 'PM' && hour24 !== 12) hour24 += 12;
            if (selectedPeriod === 'AM' && hour24 === 12) hour24 = 0;
            
            // Check if selected time is in the past
            const selectedDateTime = new Date(selectedDate);
            selectedDateTime.setHours(hour24, parseInt(selectedMinute), 0);
            
            if (selectedDateTime < new Date()) {
                alert('Please select a future time');
                return;
            }
            
            const formDateInput = document.querySelector('form input[type="date"]');
            formDateInput.value = selectedDate;
            
            // Format the date for display
            const dateObj = new Date(selectedDate);
            const formattedDate = dateObj.toLocaleDateString('en-US', { 
                month: 'short', 
                day: 'numeric', 
                year: 'numeric'
            });
            
            // Set the display value
            const displayValue = `${formattedDate} at ${selectedHour}:${selectedMinute.toString().padStart(2, '0')} ${selectedPeriod}`;
            formDateInput.setAttribute('data-display-value', displayValue);
            formDateInput.setAttribute('data-has-value', 'true');
            
            // Add hidden input for time
            let timeInput = document.querySelector('input[name="appointment_time"]');
            if (!timeInput) {
                timeInput = document.createElement('input');
                timeInput.type = 'hidden';
                timeInput.name = 'appointment_time';
                formDateInput.parentNode.appendChild(timeInput);
            }
            timeInput.value = `${selectedHour}:${selectedMinute} ${selectedPeriod}`;
            
            closeDateModal();
        }

        // Add click handlers for time slots
        document.querySelectorAll('.time-slot').forEach(slot => {
            slot.addEventListener('click', function() {
                document.querySelectorAll('.time-slot').forEach(s => s.classList.remove('selected'));
                this.classList.add('selected');
            });
        });

        // Modify the date input to open modal instead
        document.querySelector('form input[type="date"]').addEventListener('click', function(e) {
            e.preventDefault();
            openDateModal();
        });

        // Add this to prevent typing in the date input
        document.querySelector('form input[type="date"]').addEventListener('keydown', function(e) {
            e.preventDefault();
        });

        // Set minimum date to today
        document.querySelector('form input[type="date"]').min = new Date().toISOString().split('T')[0];

        function initializeTimePicker() {
            const hourScroll = document.getElementById('hourScroll');
            const minuteScroll = document.getElementById('minuteScroll');
            const periodScroll = document.getElementById('periodScroll');
            
            // Clear existing content but keep marker
            hourScroll.innerHTML = '<div class="scroll-marker"></div>';
            minuteScroll.innerHTML = '<div class="scroll-marker"></div>';
            periodScroll.innerHTML = '<div class="scroll-marker"></div>';

            // Get current time
            const now = new Date();
            const currentHour = now.getHours();
            const currentMinute = Math.floor(now.getMinutes() / 5) * 5;
            
            // Add padding items for centering
            const paddingDiv = '<div class="time-option" style="visibility: hidden;">00</div>';
            [hourScroll, minuteScroll].forEach(scroll => {
                scroll.insertAdjacentHTML('afterbegin', paddingDiv.repeat(3));
                scroll.insertAdjacentHTML('beforeend', paddingDiv.repeat(3));
            });

            // Generate hours (1-12)
            for (let i = 1; i <= 12; i++) {
                const div = document.createElement('div');
                div.className = 'time-option';
                div.textContent = i.toString().padStart(2, '0');
                div.dataset.hour = i;
                hourScroll.insertBefore(div, hourScroll.lastChild);
            }

            // Generate minutes (00-59)
            for (let i = 0; i < 60; i += 5) {
                const div = document.createElement('div');
                div.className = 'time-option';
                div.textContent = i.toString().padStart(2, '0');
                div.dataset.minute = i;
                minuteScroll.insertBefore(div, minuteScroll.lastChild);
            }

            // Set up AM/PM
            periodScroll.innerHTML = `
                <div class="scroll-marker"></div>
                ${paddingDiv.repeat(3)}
                <div class="time-option" data-period="AM">AM</div>
                <div class="time-option" data-period="PM">PM</div>
                ${paddingDiv.repeat(3)}
            `;

            // Handle scroll end and selection
            function handleScrollEnd(element) {
                const options = element.getElementsByClassName('time-option');
                const scrollMiddle = element.scrollTop + element.offsetHeight / 2;
                
                let closest = null;
                let minDistance = Infinity;
                
                Array.from(options).forEach(option => {
                    if (option.style.visibility !== 'hidden') {
                        const optionTop = option.offsetTop;
                        const optionMiddle = optionTop + option.offsetHeight / 2;
                        const distance = Math.abs(scrollMiddle - optionMiddle);
                        
                        if (distance < minDistance) {
                            minDistance = distance;
                            closest = option;
                        }
                    }
                });
                
                if (closest) {
                    element.querySelectorAll('.time-option').forEach(opt => opt.classList.remove('selected'));
                    closest.classList.add('selected');
                    element.scrollTop = closest.offsetTop - (element.offsetHeight - closest.offsetHeight) / 2;
                }
            }

            let scrollTimeout;
            const scrollEndHandler = (element) => {
                clearTimeout(scrollTimeout);
                scrollTimeout = setTimeout(() => handleScrollEnd(element), 150);
            };

            [hourScroll, minuteScroll, periodScroll].forEach(scroll => {
                scroll.addEventListener('scroll', () => scrollEndHandler(scroll));
            });

            // Set initial scroll positions
            setTimeout(() => {
                const hour12 = currentHour % 12 || 12;
                const period = currentHour >= 12 ? 'PM' : 'AM';
                
                const hourElement = hourScroll.querySelector(`[data-hour="${hour12}"]`);
                const minuteElement = minuteScroll.querySelector(`[data-minute="${currentMinute}"]`);
                const periodElement = periodScroll.querySelector(`[data-period="${period}"]`);

                if (hourElement) hourElement.scrollIntoView({ block: 'center' });
                if (minuteElement) minuteElement.scrollIntoView({ block: 'center' });
                if (periodElement) periodElement.scrollIntoView({ block: 'center' });

                [hourElement, minuteElement, periodElement].forEach(el => {
                    if (el) el.classList.add('selected');
                });
            }, 100);
        }
    </script>
</body>
</html>