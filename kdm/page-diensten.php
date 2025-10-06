page-diensten.php
<?php
/* Template Name: Diensten */
get_header();
?>

<section class="hero" style="background:url('https://images.unsplash.com/photo-1582719478180-45fd4d21f4b4?q=80&w=1600') center/cover no-repeat; height:70vh; display:flex; justify-content:center; align-items:center; position:relative; text-align:center; color:#fff;">
  <div style="position:absolute; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.6);"></div>
  <div style="position:relative; z-index:2; max-width:800px; padding:0 20px;">
    <h1 style="font-size:3em; color:#d4af37; text-shadow:0 0 20px rgba(212,175,55,0.7);">Diensten</h1>
    <p style="font-size:1.3em; margin-top:15px;">Volledige ondersteuning van vergunning tot onderhoud</p>
  </div>
</section>

<section style="padding:100px 0;">
  <div style="width:90%; max-width:1100px; margin:auto;">
    <h2 style="text-align:center; color:#d4af37; font-size:2em; margin-bottom:40px;">Wat wij doen</h2>
    <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(260px,1fr)); gap:30px;">

      <div style="background:#141b2d; border-radius:15px; padding:30px; text-align:center; box-shadow:0 0 20px rgba(0,0,0,0.4);">
        <h3 style="color:#d4af37; margin-bottom:10px;">Advies & Vergunningen</h3>
        <p style="color:#bbb; line-height:1.6;">Wij begeleiden u bij het aanvragen van kansspelvergunningen, voldoen aan de nieuwste wetgeving en zorgen dat uw locatie voldoet aan alle eisen.</p>
      </div>

      <div style="background:#141b2d; border-radius:15px; padding:30px; text-align:center; box-shadow:0 0 20px rgba(0,0,0,0.4);">
        <h3 style="color:#d4af37; margin-bottom:10px;">Exploitatie & Beheer</h3>
        <p style="color:#bbb; line-height:1.6;">Van installatie tot opbrengstverdeling: wij nemen alles uit handen. Transparant, eerlijk en zonder verrassingen.</p>
      </div>

      <div style="background:#141b2d; border-radius:15px; padding:30px; text-align:center; box-shadow:0 0 20px rgba(0,0,0,0.4);">
        <h3 style="color:#d4af37; margin-bottom:10px;">Technische Service</h3>
        <p style="color:#bbb; line-height:1.6;">Onze technische dienst is 24/7 bereikbaar. Snelle reparaties, onderhoud op locatie en preventieve controles.</p>
      </div>

      <div style="background:#141b2d; border-radius:15px; padding:30px; text-align:center; box-shadow:0 0 20px rgba(0,0,0,0.4);">
        <h3 style="color:#d4af37; margin-bottom:10px;">Verkoop & Lease</h3>
        <p style="color:#bbb; line-height:1.6;">Kies uit een ruim assortiment speelautomaten – te koop of te huur – met flexibele contracten en uitstekende garantievoorwaarden.</p>
      </div>

    </div>

    <div style="text-align:center; margin-top:80px;">
      <h2 style="color:#d4af37; margin-bottom:20px;">Meer weten over onze diensten?</h2>
      <a href="<?php echo site_url('/contact'); ?>" style="display:inline-block; background:#d4af37; color:#0a0f1c; padding:14px 35px; border-radius:30px; text-decoration:none; font-weight:600; transition:.3s;">Neem contact op</a>
    </div>
  </div>
</section>

<footer>
  <p>&copy; <?php echo date('Y'); ?> HOBEA Speelautomaten B.V. – Alle rechten voorbehouden.</p>
  <p><a href="<?php echo site_url('/contact'); ?>">Contact opnemen</a></p>
</footer>

<?php get_footer(); ?>
