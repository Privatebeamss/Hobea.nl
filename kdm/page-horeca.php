page-horeca.php
<?php
/* Template Name: Horeca-aanbod */
get_header();
?>

<section class="hero" style="background:url('https://images.unsplash.com/photo-1588008202380-2be4074496c3?q=80&w=1600') center/cover no-repeat; height:70vh; display:flex; justify-content:center; align-items:center; position:relative; text-align:center; color:#fff;">
  <div style="position:absolute; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.6);"></div>
  <div style="position:relative; z-index:2; max-width:800px; padding:0 20px;">
    <h1 style="font-size:3em; color:#d4af37; text-shadow:0 0 20px rgba(212,175,55,0.7);">Horeca-aanbod</h1>
    <p style="font-size:1.3em; margin-top:15px;">Moderne speelautomaten en amusement voor cafés en zalencentra</p>
  </div>
</section>

<section style="padding:100px 0;">
  <div style="width:90%; max-width:1100px; margin:auto;">
    <h2 style="text-align:center; color:#d4af37; font-size:2em; margin-bottom:50px;">Ons aanbod</h2>
    <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(280px,1fr)); gap:30px;">
      
      <div style="background:#141b2d; border-radius:15px; overflow:hidden; text-align:center; box-shadow:0 0 20px rgba(0,0,0,0.4);">
        <img src="https://images.unsplash.com/photo-1604147706283-36e9d3c45d57?q=80&w=1200" alt="Fruitautomaten" style="width:100%; display:block;">
        <h3 style="color:#d4af37; margin:20px 0 10px;">Fruitautomaten</h3>
        <p style="padding:0 15px 25px; color:#bbb;">Topmerken zoals Novomatic en Inspired Gaming, volledig onderhouden en altijd up-to-date.</p>
      </div>

      <div style="background:#141b2d; border-radius:15px; overflow:hidden; text-align:center; box-shadow:0 0 20px rgba(0,0,0,0.4);">
        <img src="https://images.unsplash.com/photo-1606144041811-1e2d47b8b37f?q=80&w=1200" alt="Multigame terminals" style="width:100%; display:block;">
        <h3 style="color:#d4af37; margin:20px 0 10px;">Multigame Terminals</h3>
        <p style="padding:0 15px 25px; color:#bbb;">Spelautomaten met meerdere spellen in één toestel – winstgevend en populair bij spelers.</p>
      </div>

      <div style="background:#141b2d; border-radius:15px; overflow:hidden; text-align:center; box-shadow:0 0 20px rgba(0,0,0,0.4);">
        <img src="https://images.unsplash.com/photo-1601924579564-05c56de43a9c?q=80&w=1200" alt="Jukebox" style="width:100%; display:block;">
        <h3 style="color:#d4af37; margin:20px 0 10px;">Jukebox & Amusement</h3>
        <p style="padding:0 15px 25px; color:#bbb;">Creëer sfeer in uw zaak met digitale jukeboxen en interactieve entertainmentoplossingen.</p>
      </div>

      <div style="background:#141b2d; border-radius:15px; overflow:hidden; text-align:center; box-shadow:0 0 20px rgba(0,0,0,0.4);">
        <img src="https://images.unsplash.com/photo-1536536057926-7a899b1c0d42?q=80&w=1200" alt="Roulette" style="width:100%; display:block;">
        <h3 style="color:#d4af37; margin:20px 0 10px;">Roulette & Games</h3>
        <p style="padding:0 15px 25px; color:#bbb;">Professionele elektronische roulette en amusementsgames voor extra beleving.</p>
      </div>

    </div>
  </div>
</section>

<footer>
  <p>&copy; <?php echo date('Y'); ?> HOBEA Speelautomaten B.V. – Alle rechten voorbehouden.</p>
  <p><a href="<?php echo site_url('/contact'); ?>">Contact opnemen</a></p>
</footer>

<?php get_footer(); ?>
