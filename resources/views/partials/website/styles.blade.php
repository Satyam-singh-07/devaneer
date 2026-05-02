<style>
:root {
    --bg-dark: #0B1C2C;
    --bg-deep: #081520;

    --metal-gold: #C58B3A;
    --metal-copper: #A66A3F;
    --metal-highlight: #E0C097;

    --steel: #8A949E;
    --steel-dark: #5F6B75;

    --text-light: #F5F7FA;
    --text-muted: #9CA3AF;

    --card-bg: #0F2538;
    --border-subtle: rgba(255,255,255,0.06);

    /* Logo theme colors */
    --primary: var(--metal-gold);
    --secondary: var(--metal-copper);
    --highlight: var(--metal-highlight);
    --background: var(--bg-dark);
    --foreground: var(--text-light);
}
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Inter', sans-serif;
        background-color: var(--background);
        color: var(--foreground);
        line-height: 1.6;
        overflow-x: hidden;
    }

    /* Typography */
    h1, h2, h3, .logo, .serif {
        font-family: 'Inter', sans-serif;
        font-weight: 700;
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
        background: var(--primary);
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
        background-color: var(--bg-dark);
        color: var(--text-light);
    }
    
    .section-dark p {
        color: var(--text-muted);
    }

    .section-deep {
        background-color: var(--bg-deep);
    }

    .section-mid {
        background-color: var(--steel);
    }

    /* Navigation */
    .navbar {
        background: rgba(11, 28, 44, 0.95);
        backdrop-filter: blur(10px);
        position: sticky;
        top: 0;
        z-index: 1000;
        padding: 16px 0;
        border-bottom: 1px solid var(--primary);
        box-shadow: 0 2px 10px rgba(0,0,0,0.03);
    }

    .nav-flex {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .logo {
        display: flex;
        align-items: center;
        font-size: 28px;
        font-weight: 800;
        color: var(--primary);
        text-decoration: none;
    }

    .logo img {
        height: 40px;
        margin-right: 10px;
        border-radius: 8px;
        background: var(--highlight);
        border: 2px solid var(--primary);
        box-shadow: 0 2px 8px var(--border-subtle);
    }

    .logo span {
        color: var(--secondary);
    }

    .nav-links {
        display: flex;
        gap: 32px;
        align-items: center;
    }

    .nav-links a {
        color: var(--steel);
        text-decoration: none;
        font-size: 15px;
        font-weight: 600;
        transition: color 0.3s;
    }

    .nav-links a:hover {
        color: var(--primary);
    }

    .nav-icons {
        display: flex;
        gap: 20px;
        align-items: center;
        color: var(--primary);
    }

    .cart-icon {
        position: relative;
        cursor: pointer;
    }

    .cart-count {
        position: absolute;
        top: -8px;
        right: -12px;
        background: var(--primary);
        color: var(--foreground);
        font-size: 10px;
        font-weight: 700;
        padding: 2px 6px;
        border-radius: 20px;
    }

    .mobile-menu {
        display: none;
        font-size: 24px;
        cursor: pointer;
        color: #0B1C2C;
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
        background: linear-gradient(135deg, var(--background) 0%, var(--steel) 100%);
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
        background: radial-gradient(circle, var(--primary) 0%, transparent 70%);
        opacity: 0.08;
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
        background: var(--highlight);
        border: 1px solid var(--primary);
        padding: 6px 16px;
        border-radius: 40px;
        font-size: 12px;
        font-weight: 700;
        color: var(--primary);
        margin-bottom: 24px;
    }

    .hero p {
        font-size: 18px;
        color: var(--steel-dark);
        margin: 24px 0;
    }

    .btn-primary {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        background: var(--primary);
        color: var(--foreground);
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
        background: var(--secondary);
        transform: translateY(-2px);
        box-shadow: 0 10px 25px -5px var(--primary);
    }

    .btn-outline {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        background: transparent;
        border: 2px solid var(--primary);
        color: var(--primary);
        padding: 12px 30px;
        border-radius: 48px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s;
    }

    .btn-outline:hover {
        background: var(--highlight);
        color: var(--secondary);
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
        font-weight: 800;
        color: var(--primary);
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
        background: var(--card-bg);
        border-radius: 20px;
        overflow: hidden;
        transition: transform 0.3s, box-shadow 0.3s;
        border: 1px solid var(--border-subtle);
        box-shadow: 0 4px 6px var(--border-subtle);
    }

    .product-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 30px -12px rgba(6, 182, 212, 0.15);
        border-color: rgba(6, 182, 212, 0.3);
    }

    .product-image {
        height: 220px;
        background: linear-gradient(135deg, var(--background), var(--steel));
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 72px;
        color: var(--primary);
    }

    .product-info {
        padding: 20px;
    }

    .product-title {
        font-size: 18px;
        font-weight: 700;
        margin-bottom: 8px;
        color: var(--primary);
    }

    .product-price {
        font-size: 14px;
        color: var(--text-muted);
        text-decoration: line-through;
    }

    .product-mrp {
        font-size: 24px;
        font-weight: 800;
        color: var(--primary);
        margin: 8px 0;
    }

    .add-to-cart {
        width: 100%;
        background: var(--primary);
        color: var(--foreground);
        border: none;
        padding: 12px;
        border-radius: 40px;
        font-weight: 600;
        cursor: pointer;
        transition: background 0.3s;
    }

    .add-to-cart:hover {
        background: var(--secondary);
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
        background: var(--card-bg);
        border-radius: 20px;
        padding: 24px;
        border: 1px solid var(--primary);
        box-shadow: 0 4px 15px var(--border-subtle);
    }

    .income-percent {
        font-size: 48px;
        font-weight: 800;
        color: var(--primary);
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
        background: var(--card-bg);
        text-align: center;
        padding: 16px;
        border-radius: 16px;
        border: 1px solid var(--border-subtle);
        box-shadow: 0 2px 5px var(--border-subtle);
    }

    .level-percent {
        font-size: 28px;
        font-weight: 800;
        color: var(--primary);
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
        background: var(--card-bg);
        border-radius: 20px;
        padding: 24px;
        border: 1px solid var(--border-subtle);
        transition: all 0.3s;
        box-shadow: 0 4px 10px var(--border-subtle);
    }

    .franchise-card:hover {
        border-color: var(--primary);
        transform: translateY(-5px);
        box-shadow: 0 15px 30px var(--highlight);
    }

    .franchise-price {
        font-size: 28px;
        font-weight: 800;
        color: var(--primary);
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
        background: var(--highlight);
        border: 1px solid var(--primary);
        padding: 12px 20px;
        border-radius: 48px;
        font-size: 14px;
        font-weight: 600;
        color: var(--primary);
    }

    /* Cart Sidebar */
    .cart-sidebar {
        position: fixed;
        top: 0;
        right: -100%;
        width: 100%;
        max-width: 420px;
        height: 100vh;
        background: var(--card-bg);
        z-index: 2000;
        transition: right 0.3s ease;
        display: flex;
        flex-direction: column;
        box-shadow: -5px 0 30px var(--border-subtle);
    }

    .cart-sidebar.open {
        right: 0;
    }

    .cart-header {
        padding: 24px;
        border-bottom: 1px solid rgba(0,0,0,0.05);
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
        border-top: 1px solid var(--border-subtle);
        background: var(--bg-dark);
    }

    .overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(11, 28, 44, 0.8);
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
        background: var(--primary);
        color: var(--foreground);
        padding: 12px 24px;
        border-radius: 48px;
        font-weight: 600;
        z-index: 3000;
        display: none;
        box-shadow: 0 5px 15px var(--primary);
    }

    /* Footer */
    .footer {
        background: var(--bg-dark);
        color: var(--text-light);
        padding: 60px 0 30px;
        text-align: center;
    }
    
    .footer p {
        color: var(--text-muted);
    }

    /* Tabs */
    .tabs {
        display: flex;
        gap: 12px;
        background: var(--steel);
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
        color: #495057;
    }

    .tab.active {
        background: var(--primary);
        color: var(--foreground);
        box-shadow: 0 2px 10px var(--primary);
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
