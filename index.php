<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>QuickPOS ✨ Made for Dreamers & Doers</title>
<link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>🌸</text></svg>">
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&family=Nunito:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<style>
:root {
  --pink: #FFB7C5;
  --pink-deep: #f99ab0;
  --lavender: #E6E6FA;
  --lavender-deep: #d4d4f7;
  --peach: #FFDAB9;
  --peach-deep: #ffc898;
  --cream: #FFF5F5;
  --white: #FFFFFF;
  --text: #4A4A4A;
  --text-light: #7a7a9a;
  --gradient-hero: linear-gradient(135deg, #ffe0ec 0%, #fff0f8 40%, #f0e8ff 100%);
  --gradient-pink: linear-gradient(135deg, #FFB7C5, #ff8fab);
  --gradient-peach: linear-gradient(135deg, #FFDAB9, #ffbf91);
  --shadow-soft: 0 8px 32px rgba(255,150,180,0.15);
  --shadow-card: 0 4px 24px rgba(180,120,160,0.12);
  --shadow-btn: 0 6px 20px rgba(255,120,160,0.35);
  --radius-card: 24px;
  --radius-btn: 50px;
}

*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

html { scroll-behavior: smooth; }

body {
  font-family: 'Nunito', sans-serif;
  color: var(--text);
  background: var(--cream);
  overflow-x: hidden;
}

/* ── BACKGROUND PATTERN ── */
body::before {
  content: '';
  position: fixed;
  inset: 0;
  background-image: radial-gradient(circle, #FFB7C522 1.5px, transparent 1.5px);
  background-size: 28px 28px;
  pointer-events: none;
  z-index: 0;
}

/* ── FLOATING ELEMENTS ── */
.floaties { position: fixed; inset: 0; pointer-events: none; z-index: 0; overflow: hidden; }
.floaty {
  position: absolute;
  font-size: 18px;
  animation: floatUp linear infinite;
  opacity: 0;
}
@keyframes floatUp {
  0% { transform: translateY(100vh) rotate(0deg); opacity: 0; }
  10% { opacity: 0.5; }
  90% { opacity: 0.3; }
  100% { transform: translateY(-10vh) rotate(360deg); opacity: 0; }
}

/* ── NAVBAR ── */
nav {
  position: sticky;
  top: 0;
  z-index: 1000;
  background: rgba(255,245,248,0.75);
  backdrop-filter: blur(16px);
  -webkit-backdrop-filter: blur(16px);
  border-bottom: 1px solid rgba(255,183,197,0.3);
  padding: 14px 0;
}
.nav-inner {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 32px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 24px;
}
.logo {
  font-family: 'Quicksand', sans-serif;
  font-weight: 700;
  font-size: 1.6rem;
  color: var(--pink-deep);
  text-decoration: none;
  display: flex;
  align-items: center;
  gap: 8px;
  letter-spacing: -0.5px;
}
.logo span { color: var(--text); }
.nav-links { display: flex; align-items: center; gap: 36px; list-style: none; }
.nav-links a {
  font-family: 'Quicksand', sans-serif;
  font-weight: 600;
  font-size: 0.95rem;
  color: var(--text-light);
  text-decoration: none;
  transition: color .2s;
  position: relative;
}
.nav-links a::after {
  content: '';
  position: absolute;
  bottom: -3px;
  left: 0; right: 0;
  height: 2px;
  background: var(--gradient-pink);
  border-radius: 2px;
  transform: scaleX(0);
  transition: transform .25s;
}
.nav-links a:hover { color: var(--pink-deep); }
.nav-links a:hover::after { transform: scaleX(1); }

.btn {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 12px 28px;
  border-radius: var(--radius-btn);
  font-family: 'Quicksand', sans-serif;
  font-weight: 700;
  font-size: 0.9rem;
  cursor: pointer;
  text-decoration: none;
  border: none;
  transition: transform .2s, box-shadow .2s;
}
.btn:hover { transform: translateY(-2px) scale(1.03); }
.btn-pink {
  background: var(--gradient-pink);
  color: white;
  box-shadow: var(--shadow-btn);
}
.btn-pink:hover { box-shadow: 0 10px 28px rgba(255,100,140,0.45); }
.btn-outline {
  background: white;
  color: var(--pink-deep);
  border: 2px solid var(--pink);
  box-shadow: var(--shadow-soft);
}
.btn-outline:hover { background: var(--cream); border-color: var(--pink-deep); }

/* ── HERO ── */
.hero {
  position: relative;
  z-index: 1;
  min-height: 90vh;
  display: flex;
  align-items: center;
  background: var(--gradient-hero);
  overflow: hidden;
  padding: 80px 32px 60px;
}
.hero-blob {
  position: absolute;
  border-radius: 50%;
  filter: blur(80px);
  opacity: 0.5;
  pointer-events: none;
}
.hero-blob-1 { width: 500px; height: 500px; background: #ffd6e7; top: -100px; right: -100px; }
.hero-blob-2 { width: 350px; height: 350px; background: #e8d5ff; bottom: -50px; left: -80px; }
.hero-inner {
  max-width: 1200px;
  margin: 0 auto;
  display: grid;
  grid-template-columns: 1fr 1fr;
  align-items: center;
  gap: 60px;
  width: 100%;
}
.hero-text { position: relative; z-index: 2; }
.hero-badge {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  background: white;
  border: 1.5px solid var(--pink);
  border-radius: 50px;
  padding: 8px 18px;
  font-size: 0.82rem;
  font-weight: 700;
  color: var(--pink-deep);
  margin-bottom: 24px;
  font-family: 'Quicksand', sans-serif;
  animation: fadeDown 0.7s ease both;
}
.hero h1 {
  font-family: 'Quicksand', sans-serif;
  font-size: clamp(2.2rem, 4.5vw, 3.4rem);
  font-weight: 700;
  line-height: 1.2;
  color: #3d3060;
  margin-bottom: 20px;
  animation: fadeUp 0.8s ease both 0.1s;
}
.hero h1 .pink { color: var(--pink-deep); }
.hero p {
  font-size: 1.1rem;
  color: var(--text-light);
  line-height: 1.7;
  max-width: 480px;
  margin-bottom: 36px;
  animation: fadeUp 0.8s ease both 0.2s;
  font-weight: 500;
}
.hero-btns {
  display: flex;
  gap: 16px;
  flex-wrap: wrap;
  animation: fadeUp 0.8s ease both 0.3s;
}
.hero-stats {
  display: flex;
  gap: 32px;
  margin-top: 48px;
  animation: fadeUp 0.8s ease both 0.4s;
}
.stat strong {
  font-family: 'Quicksand', sans-serif;
  font-size: 1.6rem;
  font-weight: 700;
  color: var(--pink-deep);
  display: block;
}
.stat span { font-size: 0.82rem; color: var(--text-light); font-weight: 600; }

/* ── DASHBOARD MOCKUP ── */
.hero-visual {
  position: relative;
  z-index: 2;
  animation: floatMock 5s ease-in-out infinite;
}
@keyframes floatMock {
  0%, 100% { transform: translateY(0); }
  50% { transform: translateY(-16px); }
}
.mock-window {
  background: white;
  border-radius: 22px;
  box-shadow: 0 24px 80px rgba(180,100,160,0.2), 0 2px 8px rgba(180,100,160,0.1);
  overflow: hidden;
  border: 1.5px solid rgba(255,183,197,0.4);
}
.mock-topbar {
  background: linear-gradient(90deg, #ffeef5, #f5eaff);
  padding: 14px 20px;
  display: flex;
  align-items: center;
  gap: 10px;
  border-bottom: 1px solid rgba(255,183,197,0.3);
}
.mock-dot { width: 12px; height: 12px; border-radius: 50%; }
.mock-dot:nth-child(1) { background: #ffb7c5; }
.mock-dot:nth-child(2) { background: #ffdab9; }
.mock-dot:nth-child(3) { background: #c3b1e1; }
.mock-title { font-family: 'Quicksand', sans-serif; font-weight: 700; font-size: 0.85rem; color: var(--text-light); margin-left: 8px; }
.mock-body { padding: 20px; background: #fff9fb; }
.mock-stats-row { display: grid; grid-template-columns: repeat(3, 1fr); gap: 12px; margin-bottom: 16px; }
.mock-stat {
  background: white;
  border-radius: 14px;
  padding: 14px;
  border: 1px solid rgba(255,183,197,0.3);
  box-shadow: 0 2px 8px rgba(255,150,180,0.08);
}
.mock-stat-label { font-size: 0.68rem; color: var(--text-light); font-weight: 600; margin-bottom: 4px; }
.mock-stat-value { font-family: 'Quicksand', sans-serif; font-size: 1.1rem; font-weight: 700; color: #3d3060; }
.mock-stat-change { font-size: 0.65rem; color: #68c89d; font-weight: 700; }
.mock-chart-area {
  background: white;
  border-radius: 14px;
  padding: 14px;
  border: 1px solid rgba(255,183,197,0.3);
  margin-bottom: 12px;
}
.mock-chart-label { font-size: 0.7rem; font-weight: 700; color: var(--text-light); margin-bottom: 10px; }
.mock-bars { display: flex; align-items: flex-end; gap: 6px; height: 60px; }
.mock-bar {
  flex: 1;
  border-radius: 6px 6px 0 0;
  transition: height .3s;
}
.mock-items { display: grid; grid-template-columns: 1fr 1fr; gap: 10px; }
.mock-item {
  background: white;
  border-radius: 12px;
  padding: 12px;
  display: flex;
  align-items: center;
  gap: 10px;
  border: 1px solid rgba(255,183,197,0.25);
}
.mock-item-icon { font-size: 1.4rem; }
.mock-item-name { font-size: 0.72rem; font-weight: 700; color: var(--text); }
.mock-item-price { font-size: 0.68rem; color: var(--text-light); }

/* floating deco chips around hero visual */
.deco-chip {
  position: absolute;
  background: white;
  border-radius: 50px;
  padding: 8px 16px;
  font-size: 0.78rem;
  font-weight: 700;
  font-family: 'Quicksand', sans-serif;
  display: flex;
  align-items: center;
  gap: 6px;
  box-shadow: 0 8px 24px rgba(180,100,160,0.15);
  white-space: nowrap;
  animation: chipFloat ease-in-out infinite;
}
@keyframes chipFloat {
  0%, 100% { transform: translateY(0) rotate(-2deg); }
  50% { transform: translateY(-8px) rotate(1deg); }
}
.chip-1 { top: -20px; left: 10px; color: var(--pink-deep); animation-duration: 3.5s; }
.chip-2 { bottom: 30px; right: -20px; color: #9b7fc7; animation-duration: 4.2s; }
.chip-3 { top: 40%; left: -30px; color: #e07b5f; animation-duration: 3.8s; }

/* ── SECTION WRAPPERS ── */
section { position: relative; z-index: 1; }
.section-header { text-align: center; margin-bottom: 56px; }
.section-header h2 {
  font-family: 'Quicksand', sans-serif;
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  color: #3d3060;
  margin-bottom: 12px;
}
.section-header p { color: var(--text-light); font-size: 1.05rem; font-weight: 500; max-width: 500px; margin: 0 auto; }
.section-pill {
  display: inline-block;
  background: var(--pink);
  color: white;
  border-radius: 50px;
  padding: 5px 18px;
  font-size: 0.78rem;
  font-weight: 700;
  font-family: 'Quicksand', sans-serif;
  margin-bottom: 14px;
  letter-spacing: 0.5px;
}

/* ── FEATURES ── */
.features {
  padding: 100px 32px;
  background: white;
}
.features-grid {
  max-width: 1200px;
  margin: 0 auto;
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 24px;
}
.feature-card {
  border-radius: var(--radius-card);
  padding: 36px 28px;
  transition: transform .3s, box-shadow .3s;
  cursor: default;
  position: relative;
  overflow: hidden;
}
.feature-card::before {
  content: '';
  position: absolute;
  top: -30px; right: -30px;
  width: 100px; height: 100px;
  border-radius: 50%;
  background: rgba(255,255,255,0.35);
}
.feature-card:hover { transform: translateY(-8px); box-shadow: 0 20px 50px rgba(180,100,160,0.2); }
.fc-pink { background: linear-gradient(145deg, #ffe0ec, #ffd0e0); }
.fc-lavender { background: linear-gradient(145deg, #ebe8ff, #ddd8ff); }
.fc-peach { background: linear-gradient(145deg, #ffeedd, #ffd8c0); }
.fc-cream { background: linear-gradient(145deg, #fff0f4, #ffe8ee); }
.fc-icon { font-size: 2.4rem; margin-bottom: 18px; display: block; }
.fc-title {
  font-family: 'Quicksand', sans-serif;
  font-weight: 700;
  font-size: 1.1rem;
  color: #3d3060;
  margin-bottom: 10px;
}
.fc-desc { font-size: 0.9rem; color: var(--text-light); line-height: 1.6; font-weight: 500; }

/* ── PRICING ── */
.pricing {
  padding: 100px 32px;
  background: linear-gradient(180deg, #fff5f9 0%, #f0eaff 100%);
}
.pricing-grid {
  max-width: 1100px;
  margin: 0 auto;
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 24px;
  align-items: center;
}
.price-card {
  background: white;
  border-radius: var(--radius-card);
  padding: 40px 32px;
  box-shadow: var(--shadow-card);
  transition: transform .3s, box-shadow .3s;
  position: relative;
  border: 1.5px solid rgba(255,183,197,0.2);
}
.price-card:hover { transform: translateY(-6px); box-shadow: 0 20px 50px rgba(180,100,160,0.18); }
.price-card.featured {
  background: linear-gradient(145deg, #fff0f5, #fce8ff);
  border-color: var(--pink);
  transform: scale(1.05);
  box-shadow: 0 24px 60px rgba(255,130,170,0.25);
}
.price-card.featured:hover { transform: scale(1.05) translateY(-6px); }
.price-badge {
  position: absolute;
  top: -16px;
  left: 50%;
  transform: translateX(-50%);
  background: var(--gradient-pink);
  color: white;
  padding: 6px 22px;
  border-radius: 50px;
  font-size: 0.78rem;
  font-weight: 700;
  font-family: 'Quicksand', sans-serif;
  white-space: nowrap;
  box-shadow: var(--shadow-btn);
}
.price-plan {
  font-family: 'Quicksand', sans-serif;
  font-weight: 700;
  font-size: 1rem;
  color: var(--text-light);
  margin-bottom: 8px;
  letter-spacing: 1px;
  text-transform: uppercase;
  font-size: 0.82rem;
}
.price-amount {
  font-family: 'Quicksand', sans-serif;
  font-size: 2.8rem;
  font-weight: 700;
  color: #3d3060;
  line-height: 1;
  margin-bottom: 6px;
}
.price-amount sup { font-size: 1.2rem; vertical-align: super; }
.price-amount span { font-size: 0.95rem; color: var(--text-light); font-weight: 500; }
.price-desc { font-size: 0.85rem; color: var(--text-light); margin-bottom: 28px; font-weight: 500; }
.price-divider { height: 1px; background: linear-gradient(90deg, transparent, var(--pink), transparent); margin-bottom: 24px; }
.price-features { list-style: none; margin-bottom: 32px; }
.price-features li {
  display: flex;
  align-items: center;
  gap: 10px;
  font-size: 0.88rem;
  color: var(--text);
  padding: 7px 0;
  font-weight: 500;
}
.price-features li::before { content: '✨'; font-size: 0.8rem; flex-shrink: 0; }
.price-card .btn { width: 100%; justify-content: center; }
.btn-lavender {
  background: linear-gradient(135deg, #c3b1e1, #a990d4);
  color: white;
  box-shadow: 0 6px 20px rgba(170,130,220,0.35);
}
.btn-lavender:hover { box-shadow: 0 10px 28px rgba(170,130,220,0.45); }

/* ── TESTIMONIALS ── */
.testimonials {
  padding: 100px 32px;
  background: white;
  text-align: center;
}
.testi-grid {
  max-width: 900px;
  margin: 0 auto;
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 28px;
}
.testi-card {
  background: linear-gradient(145deg, #fff5f8, #fef0ff);
  border-radius: var(--radius-card);
  padding: 36px 32px;
  text-align: left;
  border: 1.5px solid rgba(255,183,197,0.25);
  transition: transform .3s, box-shadow .3s;
  position: relative;
  overflow: hidden;
}
.testi-card::before {
  content: '"';
  position: absolute;
  top: 10px; left: 20px;
  font-size: 6rem;
  color: var(--pink);
  opacity: 0.2;
  font-family: Georgia, serif;
  line-height: 1;
}
.testi-card:hover { transform: translateY(-6px); box-shadow: var(--shadow-soft); }
.testi-stars { color: #ffb347; font-size: 0.9rem; margin-bottom: 14px; letter-spacing: 2px; }
.testi-text { font-size: 0.95rem; line-height: 1.7; color: var(--text); font-weight: 500; margin-bottom: 20px; font-style: italic; }
.testi-author { display: flex; align-items: center; gap: 12px; }
.testi-avatar {
  width: 44px; height: 44px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.4rem;
}
.av1 { background: linear-gradient(135deg, #ffd6e7, #ffb7c5); }
.av2 { background: linear-gradient(135deg, #ddd8ff, #c3b1e1); }
.testi-name { font-family: 'Quicksand', sans-serif; font-weight: 700; font-size: 0.92rem; color: #3d3060; }
.testi-role { font-size: 0.78rem; color: var(--text-light); }

/* trust logos */
.trust-row {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 16px;
  margin-top: 60px;
}
.trust-badge {
  background: var(--cream);
  border: 1.5px solid rgba(255,183,197,0.4);
  border-radius: 50px;
  padding: 10px 22px;
  font-size: 0.82rem;
  font-weight: 700;
  font-family: 'Quicksand', sans-serif;
  color: var(--text-light);
  display: flex;
  align-items: center;
  gap: 8px;
}

/* ── CONTACT ── */
.contact {
  padding: 100px 32px;
  background: linear-gradient(135deg, #fff0f5, #f5eeff);
  position: relative;
}
.contact-grid {
  max-width: 1100px;
  margin: 0 auto;
  display: grid;
  grid-template-columns: 1fr 1.6fr;
  gap: 60px;
  align-items: center;
}
.contact-left h2 {
  font-family: 'Quicksand', sans-serif;
  font-size: clamp(1.8rem, 3vw, 2.4rem);
  font-weight: 700;
  color: #3d3060;
  margin-bottom: 12px;
}
.contact-left p { color: var(--text-light); line-height: 1.7; font-weight: 500; margin-bottom: 32px; }
.contact-info-item { display: flex; align-items: center; gap: 14px; margin-bottom: 18px; }
.contact-icon {
  width: 46px; height: 46px;
  background: white;
  border-radius: 14px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.2rem;
  box-shadow: var(--shadow-card);
  flex-shrink: 0;
}
.contact-info-item p { margin: 0; font-size: 0.9rem; font-weight: 600; color: var(--text); }
.contact-info-item small { font-size: 0.78rem; color: var(--text-light); }
.contact-form {
  background: white;
  border-radius: 28px;
  padding: 48px 44px;
  box-shadow: 0 20px 60px rgba(180,100,160,0.12);
  border: 1.5px solid rgba(255,183,197,0.25);
}
.form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
.form-group { margin-bottom: 20px; }
.form-group label {
  display: block;
  font-family: 'Quicksand', sans-serif;
  font-weight: 700;
  font-size: 0.82rem;
  color: var(--text-light);
  margin-bottom: 8px;
  letter-spacing: 0.5px;
}
.form-group input,
.form-group textarea,
.form-group select {
  width: 100%;
  padding: 14px 18px;
  border: 1.5px solid rgba(255,183,197,0.5);
  border-radius: 14px;
  font-family: 'Nunito', sans-serif;
  font-size: 0.9rem;
  color: var(--text);
  background: #fff8fb;
  transition: border-color .2s, box-shadow .2s;
  outline: none;
}
.form-group input:focus,
.form-group textarea:focus {
  border-color: var(--pink);
  box-shadow: 0 0 0 4px rgba(255,183,197,0.2);
  background: white;
}
.form-group textarea { resize: vertical; min-height: 120px; }
.form-group input::placeholder,
.form-group textarea::placeholder { color: #c5b8c8; font-size: 0.88rem; }

/* ── FOOTER ── */
footer {
  background: linear-gradient(135deg, #3d3060, #5a3678);
  color: white;
  padding: 70px 32px 30px;
  position: relative;
  z-index: 1;
}
footer::before {
  content: '';
  position: absolute;
  top: 0; left: 0; right: 0;
  height: 4px;
  background: linear-gradient(90deg, var(--pink), var(--lavender), var(--peach));
}
.footer-grid {
  max-width: 1200px;
  margin: 0 auto;
  display: grid;
  grid-template-columns: 2fr 1fr 1fr 1fr;
  gap: 48px;
  margin-bottom: 48px;
}
.footer-brand .logo { color: var(--pink); font-size: 1.4rem; margin-bottom: 16px; display: inline-flex; }
.footer-tagline { font-size: 0.88rem; color: rgba(255,255,255,0.6); line-height: 1.6; margin-bottom: 24px; font-weight: 500; }
.social-icons { display: flex; gap: 12px; }
.social-icon {
  width: 40px; height: 40px;
  border-radius: 12px;
  background: rgba(255,255,255,0.1);
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
  text-decoration: none;
  font-size: 0.95rem;
  transition: background .2s, transform .2s;
}
.social-icon:hover { background: var(--pink); transform: translateY(-3px); }
.footer-col h4 {
  font-family: 'Quicksand', sans-serif;
  font-weight: 700;
  font-size: 0.9rem;
  color: white;
  margin-bottom: 18px;
  letter-spacing: 0.5px;
}
.footer-col ul { list-style: none; }
.footer-col ul li { margin-bottom: 10px; }
.footer-col ul li a {
  font-size: 0.88rem;
  color: rgba(255,255,255,0.55);
  text-decoration: none;
  font-weight: 500;
  transition: color .2s;
}
.footer-col ul li a:hover { color: var(--pink); }
.footer-bottom {
  max-width: 1200px;
  margin: 0 auto;
  padding-top: 28px;
  border-top: 1px solid rgba(255,255,255,0.1);
  display: flex;
  justify-content: space-between;
  align-items: center;
  font-size: 0.82rem;
  color: rgba(255,255,255,0.4);
  flex-wrap: wrap;
  gap: 12px;
}

/* ── SCROLL ANIMATIONS ── */
.reveal {
  opacity: 0;
  transform: translateY(30px);
  transition: opacity 0.7s ease, transform 0.7s ease;
}
.reveal.visible {
  opacity: 1;
  transform: translateY(0);
}
@keyframes fadeUp { from { opacity: 0; transform: translateY(24px); } to { opacity: 1; transform: translateY(0); } }
@keyframes fadeDown { from { opacity: 0; transform: translateY(-16px); } to { opacity: 1; transform: translateY(0); } }

/* ── RESPONSIVE ── */
@media (max-width: 1024px) {
  .features-grid { grid-template-columns: repeat(2, 1fr); }
  .pricing-grid { grid-template-columns: repeat(3, 1fr); }
  .hero-inner { grid-template-columns: 1fr; text-align: center; }
  .hero p { max-width: 100%; }
  .hero-btns { justify-content: center; }
  .hero-stats { justify-content: center; }
  .hero-visual { max-width: 500px; margin: 0 auto; }
  .footer-grid { grid-template-columns: 1fr 1fr; }
}
@media (max-width: 768px) {
  .nav-links { display: none; }
  .features-grid { grid-template-columns: 1fr 1fr; }
  .pricing-grid { grid-template-columns: 1fr; gap: 32px; }
  .price-card.featured { transform: scale(1); }
  .testi-grid { grid-template-columns: 1fr; }
  .contact-grid { grid-template-columns: 1fr; }
  .form-row { grid-template-columns: 1fr; }
  .footer-grid { grid-template-columns: 1fr; gap: 32px; }
  .hero-stats { gap: 20px; flex-wrap: wrap; }
  .mock-stats-row { grid-template-columns: repeat(3, 1fr); }
  .mock-items { display: none; }
}
@media (max-width: 480px) {
  .features-grid { grid-template-columns: 1fr; }
  .hero-btns { flex-direction: column; align-items: center; }
  .contact-form { padding: 28px 22px; }
}

/* ── HAMBURGER ── */
.hamburger {
  display: none;
  font-size: 1.4rem;
  color: var(--pink-deep);
  cursor: pointer;
  background: none;
  border: none;
}
@media (max-width: 768px) { .hamburger { display: block; } }
</style>
</head>
<body>

<!-- FLOATING ELEMENTS -->
<div class="floaties" id="floaties"></div>

<!-- NAVIGATION -->
<nav>
  <div class="nav-inner">
    <a class="logo" href="#">🌸 <span>Quick</span>POS</a>
    <ul class="nav-links">
      <li><a href="#features">Features</a></li>
      <li><a href="#pricing">Pricing</a></li>
      <li><a href="#testimonials">Loved By</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
    <a class="btn btn-pink" href="#pricing">Sign Up ✨</a>
    <button class="hamburger">☰</button>
  </div>
</nav>

<!-- HERO -->
<section class="hero">
  <div class="hero-blob hero-blob-1"></div>
  <div class="hero-blob hero-blob-2"></div>
  <div class="hero-inner">
    <div class="hero-text">
      <div class="hero-badge">✨ Trusted by 10,000+ girl bosses</div>
      <h1>The <span class="pink">Cutest POS System</span> You'll Ever Need 💕</h1>
      <p>Run your business beautifully with tools designed just for you. Simple, sweet, and seriously powerful — because you deserve both 🌸</p>
      <div class="hero-btns">
        <a class="btn btn-pink" href="#pricing">Get Started for Free ✨</a>
        <a class="btn btn-outline" href="#features">Watch Demo 🎥</a>
      </div>
      <div class="hero-stats">
        <div class="stat"><strong>10K+</strong><span>Happy Businesses</span></div>
        <div class="stat"><strong>$2M+</strong><span>Sales Processed</span></div>
        <div class="stat"><strong>4.9★</strong><span>Average Rating</span></div>
      </div>
    </div>

    <div class="hero-visual">
      <!-- Floating chips -->
      <div class="deco-chip chip-1">💰 +$1,240 today</div>
      <div class="deco-chip chip-2">📦 Stock updated ✓</div>
      <div class="deco-chip chip-3">📊 Sales up 34%!</div>
      <!-- Dashboard mockup -->
      <div class="mock-window">
        <div class="mock-topbar">
          <div class="mock-dot"></div>
          <div class="mock-dot"></div>
          <div class="mock-dot"></div>
          <div class="mock-title">QuickPOS Dashboard ✨</div>
        </div>
        <div class="mock-body">
          <div class="mock-stats-row">
            <div class="mock-stat">
              <div class="mock-stat-label">Today's Sales</div>
              <div class="mock-stat-value">$1,240</div>
              <div class="mock-stat-change">↑ +12%</div>
            </div>
            <div class="mock-stat">
              <div class="mock-stat-label">Orders</div>
              <div class="mock-stat-value">48</div>
              <div class="mock-stat-change">↑ +8%</div>
            </div>
            <div class="mock-stat">
              <div class="mock-stat-label">Customers</div>
              <div class="mock-stat-value">31</div>
              <div class="mock-stat-change">↑ +5%</div>
            </div>
          </div>
          <div class="mock-chart-area">
            <div class="mock-chart-label">Weekly Sales ✨</div>
            <div class="mock-bars" id="mockBars"></div>
          </div>
          <div class="mock-items">
            <div class="mock-item"><span class="mock-item-icon">🌸</span><div><div class="mock-item-name">Rose Candle</div><div class="mock-item-price">$24.00 · 12 left</div></div></div>
            <div class="mock-item"><span class="mock-item-icon">🎀</span><div><div class="mock-item-name">Silk Ribbon</div><div class="mock-item-price">$8.50 · 45 left</div></div></div>
            <div class="mock-item"><span class="mock-item-icon">💄</span><div><div class="mock-item-name">Lip Gloss</div><div class="mock-item-price">$15.00 · 8 left</div></div></div>
            <div class="mock-item"><span class="mock-item-icon">☕</span><div><div class="mock-item-name">Latte Blend</div><div class="mock-item-price">$18.00 · 20 left</div></div></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FEATURES -->
<section class="features" id="features">
  <div class="section-header reveal">
    <div class="section-pill">✨ FEATURES</div>
    <h2>Made with Love for You 💗</h2>
    <p>Everything you need to grow your dream business — all in one gorgeous place</p>
  </div>
  <div class="features-grid">
    <div class="feature-card fc-pink reveal">
      <span class="fc-icon">📦</span>
      <div class="fc-title">Inventory Management</div>
      <div class="fc-desc">Keep track of your pretty products with ease! Real-time updates so you're always in the loop. 🌸</div>
    </div>
    <div class="feature-card fc-lavender reveal">
      <span class="fc-icon">📊</span>
      <div class="fc-title">Sales Analytics</div>
      <div class="fc-desc">Watch your business bloom with cute charts and insights that help you make smart decisions 📈</div>
    </div>
    <div class="feature-card fc-peach reveal">
      <span class="fc-icon">🔗</span>
      <div class="fc-title">Easy Integration</div>
      <div class="fc-desc">Connect all your favorite tools seamlessly — Shopify, Instagram, Stripe, and so much more ✨</div>
    </div>
    <div class="feature-card fc-cream reveal">
      <span class="fc-icon">💬</span>
      <div class="fc-title">24/7 Sweet Support</div>
      <div class="fc-desc">We're always here to help you shine! Our care team is warm, fast, and genuinely lovely 🌟</div>
    </div>
  </div>
</section>

<!-- PRICING -->
<section class="pricing" id="pricing">
  <div class="section-header reveal">
    <div class="section-pill">💰 PRICING</div>
    <h2>Plans as Sweet as You 🍰</h2>
    <p>Pick the perfect plan for your business journey — no hidden fees, ever!</p>
  </div>
  <div class="pricing-grid">
    <!-- Basic -->
    <div class="price-card reveal">
      <div class="price-plan">🍑 Basic</div>
      <div class="price-amount"><sup>$</sup>29<span>/month</span></div>
      <div class="price-desc">Perfect to start your journey</div>
      <div class="price-divider"></div>
      <ul class="price-features">
        <li>500 transactions/month</li>
        <li>Basic analytics</li>
        <li>Email support</li>
        <li>1 location</li>
        <li>Inventory tracking</li>
      </ul>
      <a class="btn btn-outline" href="#">Start Free Trial 🎀</a>
    </div>
    <!-- Pro Featured -->
    <div class="price-card featured reveal">
      <div class="price-badge">🌸 MOST LOVED 🌸</div>
      <div class="price-plan">💕 Pro</div>
      <div class="price-amount"><sup>$</sup>79<span>/month</span></div>
      <div class="price-desc">For thriving girl bosses</div>
      <div class="price-divider"></div>
      <ul class="price-features">
        <li>Unlimited transactions</li>
        <li>Advanced analytics</li>
        <li>Priority support</li>
        <li>5 locations</li>
        <li>Custom reports</li>
        <li>Team accounts</li>
      </ul>
      <a class="btn btn-pink" href="#">Get Started 💕</a>
    </div>
    <!-- Enterprise -->
    <div class="price-card reveal">
      <div class="price-plan">🪻 Enterprise</div>
      <div class="price-amount" style="font-size:2rem; padding-top:6px">Custom</div>
      <div class="price-desc">Built for your empire</div>
      <div class="price-divider"></div>
      <ul class="price-features">
        <li>Unlimited everything</li>
        <li>Dedicated manager</li>
        <li>API access</li>
        <li>Custom integrations</li>
        <li>24/7 phone support</li>
        <li>White-label option</li>
      </ul>
      <a class="btn btn-lavender" href="#">Let's Talk 💌</a>
    </div>
  </div>
</section>

<!-- TESTIMONIALS -->
<section class="testimonials" id="testimonials">
  <div class="section-header reveal">
    <div class="section-pill">💖 TESTIMONIALS</div>
    <h2>Loved by 10,000+ Girl Bosses 💖</h2>
    <p>Real stories from real dreamers who made it happen with QuickPOS</p>
  </div>
  <div class="testi-grid">
    <div class="testi-card reveal">
      <div class="testi-stars">★★★★★</div>
      <p class="testi-text">"QuickPOS made my boutique so much easier to manage! And it's so cute! The dashboard is literally a vibe and my team absolutely loves it. ✨"</p>
      <div class="testi-author">
        <div class="testi-avatar av1">🌸</div>
        <div>
          <div class="testi-name">Sarah M.</div>
          <div class="testi-role">Flower Boutique Owner, NYC</div>
        </div>
      </div>
    </div>
    <div class="testi-card reveal">
      <div class="testi-stars">★★★★★</div>
      <p class="testi-text">"Finally a POS that matches my aesthetic! My customers love it too 💕 The reports are so clear and honestly kind of adorable. Best investment ever!"</p>
      <div class="testi-author">
        <div class="testi-avatar av2">☕</div>
        <div>
          <div class="testi-name">Jessica L.</div>
          <div class="testi-role">Cafe Owner, Los Angeles</div>
        </div>
      </div>
    </div>
  </div>
  <div class="trust-row reveal">
    <div class="trust-badge">🌸 Forbes Featured</div>
    <div class="trust-badge">💕 TechCrunch Pick</div>
    <div class="trust-badge">✨ Product Hunt #1</div>
    <div class="trust-badge">🎀 G2 Top Rated</div>
    <div class="trust-badge">⭐ 4.9/5 Capterra</div>
  </div>
</section>

<!-- CONTACT -->
<section class="contact" id="contact">
  <div class="contact-grid">
    <div class="contact-left reveal">
      <div class="section-pill">💌 CONTACT</div>
      <h2>Say Hello! 💌</h2>
      <p>We'd love to hear from you, beautiful! Whether you have questions, ideas, or just want to chat — our team is always here with open arms. 🌸</p>
      <div class="contact-info-item">
        <div class="contact-icon">📧</div>
        <div><p>hello@quickpos.app</p><small>We reply within 2 hours!</small></div>
      </div>
      <div class="contact-info-item">
        <div class="contact-icon">📞</div>
        <div><p>+1 (800) QUICKPOS</p><small>Mon–Fri, 9am–6pm EST</small></div>
      </div>
      <div class="contact-info-item">
        <div class="contact-icon">📍</div>
        <div><p>New York, NY</p><small>Visit our cozy little office</small></div>
      </div>
    </div>
    <div class="contact-form reveal">
      <div class="form-row">
        <div class="form-group">
          <label>YOUR NAME 💕</label>
          <input type="text" placeholder="e.g. Sarah Johnson">
        </div>
        <div class="form-group">
          <label>YOUR EMAIL ✨</label>
          <input type="email" placeholder="hello@yourbiz.com">
        </div>
      </div>
      <div class="form-group">
        <label>BUSINESS TYPE 🌸</label>
        <input type="text" placeholder="Boutique, Cafe, Salon...">
      </div>
      <div class="form-group">
        <label>YOUR MESSAGE 🌸</label>
        <textarea placeholder="Tell us what's on your mind... we're all ears! 💗"></textarea>
      </div>
      <button class="btn btn-pink" style="width:100%;justify-content:center;font-size:1rem;padding:16px;" onclick="handleSubmit(event)">
        Send Love 💖
      </button>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer>
  <div class="footer-grid">
    <div class="footer-brand">
      <a class="logo" href="#">🌸 QuickPOS</a>
      <p class="footer-tagline">Making business beautiful, one transaction at a time. Built with love for the dreamers and doers who make the world prettier. 💕</p>
      <div class="social-icons">
        <a class="social-icon" href="#"><i class="fab fa-instagram"></i></a>
        <a class="social-icon" href="#"><i class="fab fa-pinterest"></i></a>
        <a class="social-icon" href="#"><i class="fab fa-twitter"></i></a>
        <a class="social-icon" href="#"><i class="fab fa-tiktok"></i></a>
      </div>
    </div>
    <div class="footer-col">
      <h4>Product</h4>
      <ul>
        <li><a href="#">Features</a></li>
        <li><a href="#">Pricing</a></li>
        <li><a href="#">Integrations</a></li>
        <li><a href="#">Changelog</a></li>
        <li><a href="#">Roadmap</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <h4>Support</h4>
      <ul>
        <li><a href="#">Help Center</a></li>
        <li><a href="#">Community</a></li>
        <li><a href="#">Tutorials</a></li>
        <li><a href="#">Status</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <h4>Company</h4>
      <ul>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Careers 💕</a></li>
        <li><a href="#">Privacy</a></li>
        <li><a href="#">Terms</a></li>
      </ul>
    </div>
  </div>
  <div class="footer-bottom">
    <span>© 2024 QuickPOS. Made with 💖 for girl bosses everywhere</span>
    <span>✨ Making business beautiful 💕</span>
  </div>
</footer>

<script>
// ── Floating emojis ──
const emojis = ['✨','💕','🌸','⭐','💗','🎀','🌷','💖','🌟','🍀'];
const floaties = document.getElementById('floaties');
for (let i = 0; i < 18; i++) {
  const el = document.createElement('div');
  el.className = 'floaty';
  el.textContent = emojis[Math.floor(Math.random() * emojis.length)];
  el.style.cssText = `
    left: ${Math.random() * 100}%;
    font-size: ${10 + Math.random() * 14}px;
    animation-duration: ${10 + Math.random() * 18}s;
    animation-delay: ${Math.random() * 15}s;
  `;
  floaties.appendChild(el);
}

// ── Mock chart bars ──
const barData = [45, 70, 55, 85, 60, 90, 75];
const barColors = ['#ffc0d0','#d0c8ff','#ffd4b0','#ffc0d0','#d0c8ff','#ffb7c5','#e6b0ff'];
const barsEl = document.getElementById('mockBars');
barData.forEach((h, i) => {
  const bar = document.createElement('div');
  bar.className = 'mock-bar';
  bar.style.cssText = `height:${h}%; background:${barColors[i]};`;
  barsEl.appendChild(bar);
});

// ── Scroll reveal ──
const reveals = document.querySelectorAll('.reveal');
const observer = new IntersectionObserver(entries => {
  entries.forEach(e => {
    if (e.isIntersecting) { e.target.classList.add('visible'); }
  });
}, { threshold: 0.12 });
reveals.forEach(el => observer.observe(el));

// ── Stagger feature cards ──
document.querySelectorAll('.feature-card, .price-card, .testi-card').forEach((el, i) => {
  el.style.transitionDelay = `${i * 0.1}s`;
});

// ── Form submit ──
function handleSubmit(e) {
  e.preventDefault();
  const btn = e.target;
  btn.textContent = '💌 Sent with Love!';
  btn.style.background = 'linear-gradient(135deg, #68c89d, #52b788)';
  setTimeout(() => {
    btn.textContent = 'Send Love 💖';
    btn.style.background = '';
  }, 3000);
}
</script>
</body>
</html>