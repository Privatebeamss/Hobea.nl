page-about.php
<?php
/* Template Name: Over ons */
get_header();
?>

<section class="hero" style="background:url('https://images.unsplash.com/photo-1601924579564-05c56de43a9c?q=80&w=1600') center/cover no-repeat; height:70vh; display:flex; justify-content:center; align-items:center; position:relative; text-align:center; color:#fff;">
  <div style="position:absolute; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.6);"></div>
  <div style="position:relative; z-index:2; max-width:800px; padding:0 20px;">
    <h1 style="font-size:3em; color:#d4af37; text-shadow:0 0 20px rgba(212,175,55,0.7);">Over HOBEA</h1>
    <p style="font-size:1.3em; margin-top:15px;">Een traditie van amusement sinds 1951</p>
  </div>
</section>

<section style="padding:100px 0;">
  <div style="width:90%; max-width:1100px; margin:auto;">
    <h2 style="text-align:center; color:#d4af37; font-size:2em; margin-bottom:40px;">Wie wij zijn</h2>
    <p style="max-width:900px; margin:auto; text-align:center; line-height:1.8; font-size:1.1em; color:#ccc;">
      HOBEA Speelautomaten is een familiebedrijf dat sinds 1951 actief is in de amusementsbranche.
      Vanuit onze thuisbasis in Schiedam leveren wij hoogwaardige speelautomaten en entertainmentoplossingen
      aan horecaondernemers in heel Nederland.
    </p>
    <p style="max-width:900px; margin:30px auto; text-align:center; line-height:1.8; font-size:1.1em; color:#ccc;">
      Onze filosofie draait om betrouwbaarheid, persoonlijke service en verantwoord speelplezier.
      Dankzij een hecht team en jarenlange ervaring hebben wij een sterke reputatie opgebouwd binnen de branche.
    </p>
  </div>
</section>

<section style="background:#111; padding:100px 0;">
  <div style="width:90%; max-width:1100px; margin:auto;">
    <h2 style="color:#d4af37; text-align:center; font-size:2em; margin-bottom:50px;">Onze kernwaarden</h2>
    <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(280px,1fr)); gap:30px;">
      <div style="background:#141b2d; border-radius:15px; padding:30px; box-shadow:0 0 20px rgba(0,0,0,0.4); text-align:center;">
        <h3 style="color:#d4af37; margin-bottom:10px;">Betrouwbaarheid</h3>
        <p style="color:#bbb;">Wij doen wat we beloven – transparante samenwerking staat bij ons voorop.</p>
      </div>
      <div style="background:#141b2d; border-radius:15px; padding:30px; box-shadow:0 0 20px rgba(0,0,0,0.4); text-align:center;">
        <h3 style="color:#d4af37; margin-bottom:10px;">Innovatie</h3>
        <p style="color:#bbb;">Door te investeren in moderne technologie bieden we onze klanten de nieuwste automaten.</p>
      </div>
      <div style="background:#141b2d; border-radius:15px; padding:30px; box-shadow:0 0 20px rgba(0,0,0,0.4); text-align:center;">
        <h3 style="color:#d4af37; margin-bottom:10px;">Verantwoord spelen</h3>
        <p style="color:#bbb;">Wij promoten een veilige en plezierige speelomgeving voor iedereen.</p>
      </div>
    </div>
  </div>
</section>

<footer>
  <p>&copy; <?php echo date('Y'); ?> HOBEA Speelautomaten B.V. – Alle rechten voorbehouden.</p>
  <p><a href="<?php echo site_url('/contact'); ?>">Contact opnemen</a></p>
</footer>

<?php get_footer(); ?>
