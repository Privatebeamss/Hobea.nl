page-contact.php
<?php
/* Template Name: Contact */
get_header();
?>

<section class="hero" style="background:url('https://images.unsplash.com/photo-1563986768609-322da13575f3?q=80&w=1600') center/cover no-repeat; height:70vh; display:flex; justify-content:center; align-items:center; position:relative; text-align:center; color:#fff;">
  <div style="position:absolute; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.6);"></div>
  <div style="position:relative; z-index:2; max-width:800px; padding:0 20px;">
    <h1 style="font-size:3em; color:#d4af37; text-shadow:0 0 20px rgba(212,175,55,0.7);">Contact</h1>
    <p style="font-size:1.3em; margin-top:15px;">Neem direct contact met ons op</p>
  </div>
</section>

<section style="padding:100px 0;">
  <div style="width:90%; max-width:1100px; margin:auto;">
    <h2 style="text-align:center; color:#d4af37; font-size:2em; margin-bottom:50px;">Wij horen graag van u</h2>
    
    <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(320px,1fr)); gap:40px; align-items:flex-start;">

      <!-- Contactgegevens -->
      <div style="background:#141b2d; border-radius:15px; padding:30px; box-shadow:0 0 20px rgba(0,0,0,0.4);">
        <h3 style="color:#d4af37; margin-bottom:20px;">Bedrijfsgegevens</h3>
        <p style="color:#bbb;">📍 Admiraal Trompstraat 15<br>3115 HK Schiedam</p>
        <p style="color:#bbb;">📞 010 – 20 83 000</p>
        <p style="color:#bbb;">✉️ info@hobea.nl</p>
        <p style="color:#bbb;">🕘 Maandag t/m vrijdag: 09:00 – 17:00</p>
      </div>

      <!-- Contactformulier -->
      <div style="background:#141b2d; border-radius:15px; padding:30px; box-shadow:0 0 20px rgba(0,0,0,0.4);">
        <h3 style="color:#d4af37; margin-bottom:20px;">Stuur ons een bericht</h3>
        <form action="#" method="post">
          <label for="name" style="color:#d4af37; font-weight:500;">Naam</label>
          <input type="text" id="name" name="name" placeholder="Uw naam" required style="width:100%; padding:12px; border:none; border-radius:8px; margin-bottom:15px; background:#1c253b; color:#eee;">

          <label for="email" style="color:#d4af37; font-weight:500;">E-mailadres</label>
          <input type="email" id="email" name="email" placeholder="Uw e-mailadres" required style="width:100%; padding:12px; border:none; border-radius:8px; margin-bottom:15px; background:#1c253b; color:#eee;">

          <label for="message" style="color:#d4af37; font-weight:500;">Bericht</label>
          <textarea id="message" name="message" placeholder="Uw bericht..." required style="width:100%; height:120px; border:none; border-radius:8px; margin-bottom:20px; background:#1c253b; color:#eee; resize:none;"></textarea>

          <button type="submit" style="background:#d4af37; color:#0a0f1c; padding:12px 30px; border:none; border-radius:25px; font-weight:600; cursor:pointer; transition:.3s;">Verstuur bericht</button>
        </form>
      </div>

    </div>

    <!-- Google Maps -->
    <div style="margin-top:60px;">
      <iframe src="https://www.google.com/maps?q=Admiraal+Trompstraat+15+Schiedam&output=embed" allowfullscreen style="width:100%; height:350px; border:none; border-radius:15px;"></iframe>
    </div>
  </div>
</section>

<footer>
  <p>&copy; <?php echo date('Y'); ?> HOBEA Speelautomaten B.V. – Alle rechten voorbehouden.</p>
  <p><a href="<?php echo site_url('/'); ?>">Terug naar Home</a></p>
</footer>

<?php get_footer(); ?>
