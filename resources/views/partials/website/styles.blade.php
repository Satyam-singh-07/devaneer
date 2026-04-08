<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Inter', sans-serif;
        background-color: #050A10;
        color: #E8E6E3;
        line-height: 1.6;
        overflow-x: hidden;
    }

    /* Typography */
    h1, h2, h3, .logo, .serif {
        font-family: 'Cormorant', serif;
        font-weight: 600;
        letter-spacing: -0.02em;
    }

    h1 {
        font-size: 42px;
        line-height: 1.2;
    }

    h2 {
        font-size: 32px;
        margin-bottom: 24px;
        position: relative;
        display: inline-block;
    }

    h2:after {
        content: '';
        position: absolute;
        bottom: -8px;
        left: 0;
        width: 60px;
        height: 3px;
        background: #C47A3A;
        border-radius: 2px;
    }

    @media (min-width: 768px) {
        h1 { font-size: 64px; }
        h2 { font-size: 42px; }
    }

    /* Container */
    .container {
        width: 100%;
        max-width: 1280px;
        margin: 0 auto;
        padding: 0 20px;
    }

    /* Section Backgrounds */
    .section-dark {
        background-color: #0B1C2C;
    }

    .section-deep {
        background-color: #050A10;
    }

    .section-mid {
        background-color: #2C2F33;
    }

    /* Navigation */
    .navbar {
        background: rgba(5, 10, 16, 0.95);
        backdrop-filter: blur(10px);
        position: sticky;
        top: 0;
        z-index: 1000;
        padding: 16px 0;
        border-bottom: 1px solid rgba(196, 122, 58, 0.2);
    }

    .nav-flex {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .logo {
        font-size: 28px;
        font-weight: 700;
        color: #E8E6E3;
        text-decoration: none;
    }

    .logo span {
        color: #C47A3A;
    }

    .nav-links {
        display: flex;
        gap: 32px;
        align-items: center;
    }

    .nav-links a {
        color: #C5C7C9;
        text-decoration: none;
        font-size: 14px;
        font-weight: 500;
        transition: color 0.3s;
    }

    .nav-links a:hover {
        color: #C47A3A;
    }

    .nav-icons {
        display: flex;
        gap: 20px;
        align-items: center;
    }

    .cart-icon {
        position: relative;
        cursor: pointer;
    }

    .cart-count {
        position: absolute;
        top: -8px;
        right: -12px;
        background: #C47A3A;
        color: #050A10;
        font-size: 10px;
        font-weight: 700;
        padding: 2px 6px;
        border-radius: 20px;
    }

    .mobile-menu {
        display: none;
        font-size: 24px;
        cursor: pointer;
    }

    @media (max-width: 768px) {
        .nav-links {
            display: none;
        }
        .mobile-menu {
            display: block;
        }
    }

    /* Hero Section */
    .hero {
        min-height: 90vh;
        display: flex;
        align-items: center;
        background: linear-gradient(135deg, #050A10 0%, #0B1C2C 100%);
        position: relative;
        overflow: hidden;
    }

    .hero:before {
        content: '';
        position: absolute;
        top: -50%;
        right: -20%;
        width: 70%;
        height: 150%;
        background: radial-gradient(circle, rgba(196,122,58,0.08) 0%, transparent 70%);
        pointer-events: none;
    }

    .hero-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 60px;
        align-items: center;
    }

    @media (max-width: 768px) {
        .hero-grid {
            grid-template-columns: 1fr;
            text-align: center;
            gap: 40px;
        }
    }

    .hero-badge {
        display: inline-block;
        background: rgba(196, 122, 58, 0.15);
        border: 1px solid rgba(196, 122, 58, 0.3);
        padding: 6px 16px;
        border-radius: 40px;
        font-size: 12px;
        font-weight: 600;
        color: #C47A3A;
        margin-bottom: 24px;
    }

    .hero p {
        font-size: 18px;
        color: #C5C7C9;
        margin: 24px 0;
    }

    .btn-primary {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        background: #C47A3A;
        color: white;
        padding: 14px 32px;
        border-radius: 48px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s;
        border: none;
        cursor: pointer;
        font-size: 16px;
    }

    .btn-primary:hover {
        background: #8A4F2A;
        transform: translateY(-2px);
        box-shadow: 0 10px 25px -5px rgba(196, 122, 58, 0.3);
    }

    .btn-outline {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        background: transparent;
        border: 1px solid #C47A3A;
        color: #C47A3A;
        padding: 14px 32px;
        border-radius: 48px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s;
    }

    .btn-outline:hover {
        background: rgba(196, 122, 58, 0.1);
        border-color: #8A4F2A;
    }

    .hero-stats {
        display: flex;
        gap: 32px;
        margin-top: 40px;
    }

    @media (max-width: 768px) {
        .hero-stats {
            justify-content: center;
        }
    }

    .stat {
        text-align: center;
    }

    .stat-number {
        font-size: 28px;
        font-weight: 700;
        color: #C47A3A;
    }

    /* Section Padding */
    .section {
        padding: 80px 0;
    }

    @media (max-width: 768px) {
        .section {
            padding: 60px 0;
        }
    }

    /* Product Grid */
    .product-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 24px;
    }

    @media (max-width: 1024px) {
        .product-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 640px) {
        .product-grid {
            grid-template-columns: 1fr;
        }
    }

    .product-card {
        background: #2C2F33;
        border-radius: 20px;
        overflow: hidden;
        transition: transform 0.3s, box-shadow 0.3s;
        border: 1px solid rgba(196, 122, 58, 0.1);
    }

    .product-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 30px -12px rgba(0,0,0,0.5);
        border-color: rgba(196, 122, 58, 0.3);
    }

    .product-image {
        height: 220px;
        background: linear-gradient(135deg, #3A3F45, #2C2F33);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 72px;
    }

    .product-info {
        padding: 20px;
    }

    .product-title {
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 8px;
    }

    .product-price {
        font-size: 14px;
        color: #C5C7C9;
        text-decoration: line-through;
    }

    .product-mrp {
        font-size: 24px;
        font-weight: 700;
        color: #C47A3A;
        margin: 8px 0;
    }

    .add-to-cart {
        width: 100%;
        background: #C47A3A;
        color: white;
        border: none;
        padding: 12px;
        border-radius: 40px;
        font-weight: 600;
        cursor: pointer;
        transition: background 0.3s;
    }

    .add-to-cart:hover {
        background: #8A4F2A;
    }

    /* Income Grid */
    .income-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
        margin-top: 40px;
    }

    @media (max-width: 640px) {
        .income-grid {
            grid-template-columns: 1fr;
        }
    }

    .income-card {
        background: rgba(44, 47, 51, 0.6);
        backdrop-filter: blur(10px);
        border-radius: 20px;
        padding: 24px;
        border: 1px solid rgba(196, 122, 58, 0.15);
    }

    .income-percent {
        font-size: 48px;
        font-weight: 700;
        color: #C47A3A;
        font-family: 'Cormorant', serif;
    }

    /* Level Grid */
    .level-grid {
        display: grid;
        grid-template-columns: repeat(7, 1fr);
        gap: 12px;
        margin: 30px 0;
    }

    @media (max-width: 768px) {
        .level-grid {
            grid-template-columns: repeat(4, 1fr);
        }
    }

    @media (max-width: 480px) {
        .level-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    .level-item {
        background: #2C2F33;
        text-align: center;
        padding: 16px;
        border-radius: 16px;
        border: 1px solid rgba(196, 122, 58, 0.1);
    }

    .level-percent {
        font-size: 28px;
        font-weight: 700;
        color: #C47A3A;
    }

    /* Franchise Cards */
    .franchise-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 24px;
        margin-top: 40px;
    }

    @media (max-width: 1024px) {
        .franchise-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 640px) {
        .franchise-grid {
            grid-template-columns: 1fr;
        }
    }

    .franchise-card {
        background: #0B1C2C;
        border-radius: 20px;
        padding: 24px;
        border: 1px solid rgba(196, 122, 58, 0.2);
        transition: all 0.3s;
    }

    .franchise-card:hover {
        border-color: #C47A3A;
        transform: translateY(-5px);
    }

    .franchise-price {
        font-size: 28px;
        font-weight: 700;
        color: #C47A3A;
        margin: 16px 0;
    }

    /* Safety Badges */
    .safety-grid {
        display: flex;
        flex-wrap: wrap;
        gap: 16px;
        margin-top: 30px;
    }

    .safety-badge {
        background: rgba(196, 122, 58, 0.1);
        border: 1px solid rgba(196, 122, 58, 0.2);
        padding: 12px 20px;
        border-radius: 48px;
        font-size: 14px;
        font-weight: 500;
    }

    /* Cart Sidebar */
    .cart-sidebar {
        position: fixed;
        top: 0;
        right: -100%;
        width: 100%;
        max-width: 420px;
        height: 100vh;
        background: #0B1C2C;
        z-index: 2000;
        transition: right 0.3s ease;
        display: flex;
        flex-direction: column;
        border-left: 1px solid rgba(196, 122, 58, 0.3);
    }

    .cart-sidebar.open {
        right: 0;
    }

    .cart-header {
        padding: 24px;
        border-bottom: 1px solid rgba(196, 122, 58, 0.2);
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .cart-items {
        flex: 1;
        overflow-y: auto;
        padding: 20px;
    }

    .cart-footer {
        padding: 24px;
        border-top: 1px solid rgba(196, 122, 58, 0.2);
    }

    .overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.8);
        backdrop-filter: blur(4px);
        z-index: 1999;
        display: none;
    }

    .overlay.show {
        display: block;
    }

    /* Toast */
    .toast {
        position: fixed;
        bottom: 30px;
        left: 50%;
        transform: translateX(-50%);
        background: #C47A3A;
        color: #050A10;
        padding: 12px 24px;
        border-radius: 48px;
        font-weight: 600;
        z-index: 3000;
        display: none;
    }

    /* Footer */
    .footer {
        background: #050A10;
        padding: 60px 0 30px;
        border-top: 1px solid rgba(196, 122, 58, 0.15);
        text-align: center;
    }

    /* Tabs */
    .tabs {
        display: flex;
        gap: 12px;
        background: #2C2F33;
        padding: 6px;
        border-radius: 60px;
        margin-bottom: 40px;
        display: inline-flex;
    }

    .tab {
        padding: 12px 28px;
        border-radius: 40px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s;
    }

    .tab.active {
        background: #C47A3A;
        color: #050A10;
    }

    .section-content {
        display: none;
    }

    .section-content.active {
        display: block;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .container {
            padding: 0 16px;
        }
        
        .btn-primary, .btn-outline {
            padding: 12px 24px;
        }
    }
</style>