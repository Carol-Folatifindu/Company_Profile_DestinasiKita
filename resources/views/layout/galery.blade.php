@extends('layout.homepage')

@section('title', 'Galeri - DestinasiKita')

@section('content')

<style>
    /* ===== Layout halaman ===== */
    .page-galery { padding-top: 40px; }

    /* ===== GALLERY ===== */
    .gl-section { padding: 60px 20px 40px; }
    .gl-container { max-width: 1100px; margin: 0 auto; text-align: center; }
    .gl-heading { font-size: 2.2rem; font-weight: 800; margin: 0 0 8px; color: #111827; }
    .gl-subheading { color: #6b7280; font-size: 1rem; margin: 0 0 28px; }

    .gl-filters { display: flex; flex-wrap: wrap; justify-content: center; gap: 10px; margin-bottom: 32px; }
    .gl-filter-btn {
        padding: 9px 22px; border: 1px solid #d1d5db; border-radius: 999px;
        background: #fff; color: #374151; font-weight: 600; font-size: .9rem;
        cursor: pointer; transition: .2s;
    }
    .gl-filter-btn:hover { border-color: #00d68f; color: #00a870; }
    .gl-filter-btn.active { background: #00d68f; border-color: #00d68f; color: #fff; }

    .gl-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); gap: 20px; }
    .gl-item {
        position: relative; margin: 0; overflow: hidden; border-radius: 14px;
        aspect-ratio: 4 / 3; background: linear-gradient(135deg, #e5e7eb, #d1d5db);
        box-shadow: 0 4px 14px rgba(0,0,0,.08);
    }
    .gl-item img { width: 100%; height: 100%; object-fit: cover; display: block; transition: transform .4s; }
    .gl-item:hover img { transform: scale(1.08); }
    .gl-item figcaption {
        position: absolute; left: 0; right: 0; bottom: 0; padding: 16px; text-align: left; color: #fff;
        background: linear-gradient(transparent, rgba(0,0,0,.75));
        display: flex; flex-direction: column; gap: 2px;
    }
    .gl-cat { font-size: .72rem; opacity: .9; text-transform: uppercase; letter-spacing: .6px; color: #6ee7b7; }
    .gl-item.hide { display: none; }

    /* ===== TESTIMONIALS ===== */
    .gt-section { max-width: 1100px; margin: 0 auto; padding: 60px 20px 80px; }
    .gt-heading { text-align: center; margin-bottom: 36px; }
    .gt-badge {
        display: inline-block; padding: 6px 16px; border-radius: 999px;
        background: #e6fbf3; color: #00a870; font-weight: 600; font-size: .85rem; margin-bottom: 12px;
    }
    .gt-title { font-size: 2.2rem; font-weight: 800; margin: 0 0 8px; color: #111827; }
    .gt-subtitle { color: #6b7280; margin: 0; }

    .gt-slider { position: relative; display: flex; align-items: center; gap: 12px; }
    .gt-track {
        display: flex; gap: 20px; flex: 1; overflow-x: auto;
        scroll-snap-type: x mandatory; scroll-behavior: smooth;
        padding: 10px 4px 16px; scrollbar-width: none;
    }
    .gt-track::-webkit-scrollbar { display: none; }

    .gt-card {
        flex: 0 0 calc((100% - 20px) / 2); min-width: 280px; scroll-snap-align: start;
        display: flex; align-items: center; gap: 18px; padding: 22px;
        background: #fff; border: 1px solid #e5e7eb; border-radius: 16px;
        box-shadow: 0 6px 20px rgba(0,0,0,.06); box-sizing: border-box;
    }
    .gt-avatar { width: 84px; height: 84px; border-radius: 50%; object-fit: cover; flex-shrink: 0; background: #e5e7eb; }
    .gt-name { margin: 0 0 4px; font-size: 1.05rem; font-weight: 700; color: #111827; }
    .gt-stars { color: #f59e0b; font-size: 1.05rem; letter-spacing: 2px; margin-bottom: 6px; }
    .gt-off { color: #d1d5db; }
    .gt-text { margin: 0; color: #4b5563; font-size: .92rem; line-height: 1.6; }

    .gt-arrow {
        width: 42px; height: 42px; flex-shrink: 0; border-radius: 50%;
        border: 1px solid #d1d5db; background: #fff; color: #374151;
        font-size: 1.1rem; cursor: pointer; transition: .2s;
    }
    .gt-arrow:hover { background: #00d68f; border-color: #00d68f; color: #fff; }

    .gt-dots { display: flex; justify-content: center; gap: 8px; margin-top: 12px; }
    .gt-dot { width: 10px; height: 10px; border-radius: 50%; background: #d1d5db; border: 0; padding: 0; cursor: pointer; transition: .2s; }
    .gt-dot.active { background: #00d68f; width: 26px; border-radius: 999px; }

    @media (max-width: 768px) {
        .gt-card { flex: 0 0 100%; }
        .gt-arrow { display: none; }
    }
</style>

<div class="page-galery">

{{-- ===================== GALLERY (HTML biasa) ===================== --}}
<section id="gallery" class="gl-section">
    <div class="gl-container">
        <h2 class="gl-heading">Galeri Destinasi</h2>
        <p class="gl-subheading">Lihat keindahan destinasi wisata pilihan kami</p>

        <div class="gl-filters">
            <button type="button" class="gl-filter-btn active" data-filter="Semua">Semua</button>
            <button type="button" class="gl-filter-btn" data-filter="Pantai">Pantai</button>
            <button type="button" class="gl-filter-btn" data-filter="Gunung">Gunung</button>
            <button type="button" class="gl-filter-btn" data-filter="Budaya">Budaya</button>
            <button type="button" class="gl-filter-btn" data-filter="Kuliner">Kuliner</button>
        </div>

        <div class="gl-grid">
            <figure class="gl-item" data-category="Pantai">
                <img src="{{ asset('assets/pantaikuta.jpg') }}" alt="Pantai Kuta" loading="lazy" onerror="this.style.visibility='hidden'">
                <figcaption><span class="gl-cat">Pantai</span><strong>Pantai Kuta</strong></figcaption>
            </figure>

            <figure class="gl-item" data-category="Pantai">
                <img src="{{ asset('assets/rajaampat.jpg') }}" alt="Raja Ampat" loading="lazy" onerror="this.style.visibility='hidden'">
                <figcaption><span class="gl-cat">Pantai</span><strong>Raja Ampat</strong></figcaption>
            </figure>

            <figure class="gl-item" data-category="Gunung">
                <img src="{{ asset('assets/gunungbromo.jpg') }}" alt="Gunung Bromo" loading="lazy" onerror="this.style.visibility='hidden'">
                <figcaption><span class="gl-cat">Gunung</span><strong>Gunung Bromo</strong></figcaption>
            </figure>

            <figure class="gl-item" data-category="Gunung">
                <img src="{{ asset('assets/gunungrinjani.jpg') }}" alt="Gunung Rinjani" loading="lazy" onerror="this.style.visibility='hidden'">
                <figcaption><span class="gl-cat">Gunung</span><strong>Gunung Rinjani</strong></figcaption>
            </figure>

            <figure class="gl-item" data-category="Budaya">
                <img src="{{ asset('assets/candiborobudur.jpg') }}" alt="Candi Borobudur" loading="lazy" onerror="this.style.visibility='hidden'">
                <figcaption><span class="gl-cat">Budaya</span><strong>Candi Borobudur</strong></figcaption>
            </figure>

            <figure class="gl-item" data-category="Budaya">
                <img src="{{ asset('assets/tarikecak.jpg') }}" alt="Tari Kecak" loading="lazy" onerror="this.style.visibility='hidden'">
                <figcaption><span class="gl-cat">Budaya</span><strong>Tari Kecak</strong></figcaption>
            </figure>

            <figure class="gl-item" data-category="Kuliner">
                <img src="{{ asset('assets/gudeg.jpg') }}" alt="Gudeg Jogja" loading="lazy" onerror="this.style.visibility='hidden'">
                <figcaption><span class="gl-cat">Kuliner</span><strong>Gudeg Jogja</strong></figcaption>
            </figure>

            <figure class="gl-item" data-category="Kuliner">
                <img src="{{ asset('assets/rawon1.jpg') }}" alt="Rawon Surabaya" loading="lazy" onerror="this.style.visibility='hidden'">
                <figcaption><span class="gl-cat">Kuliner</span><strong>Rawon Surabaya</strong></figcaption>
            </figure>
        </div>
    </div>
</section>

{{-- ===================== TESTIMONIALS ===================== --}}
<section id="testimonials" class="gt-section">
    <div class="gt-heading">
        <span class="gt-badge">💬 Testimonials</span>
        <h2 class="gt-title">What Our Travelers Say</h2>
        <p class="gt-subtitle">Hear from our happy travelers and their unforgettable journeys.</p>
    </div>

    <div class="gt-slider">
        <button class="gt-arrow gt-arrow--prev" id="gtPrev" aria-label="Sebelumnya">&#10094;</button>

        <div class="gt-track" id="gtTrack">
            <article class="gt-card">
                <img class="gt-avatar" src="{{ asset('assets/sarah.jpg') }}" alt="Sarah Putri">
                <div>
                    <h3 class="gt-name">Sarah Putri</h3>