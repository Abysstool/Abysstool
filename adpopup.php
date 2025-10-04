 <?php
// Put your different ad codes (or iframe links) in this array
$ads = [
  '<iframe src="https://your-ad-network.com/ad1" style="width:100%;height:250px;border:0;"></iframe>',
  '<iframe src="https://your-ad-network.com/ad2" style="width:100%;height:250px;border:0;"></iframe>',
  '<iframe src="https://your-ad-network.com/ad3" style="width:100%;height:250px;border:0;"></iframe>'
];

// Pick one at random
$randomAd = $ads[array_rand($ads)];
?>

<div id="adModal" class="ad-modal">
  <div class="ad-content">
    <span class="ad-close" onclick="document.getElementById('adModal').style.display='none'">&times;</span>
    <h3>Advertisement</h3>
    <?php echo $randomAd; ?>
  </div>
</div>

<style>
.ad-modal {
  display: none; 
  position: fixed; 
  z-index: 9999; 
  padding-top: 80px; 
  left: 0;
  top: 0;
  width: 100%; 
  height: 100%; 
  overflow: auto; 
  background-color: rgba(0,0,0,0.6);
}
.ad-content {
  background: #fff;
  margin: auto;
  padding: 20px;
  border-radius: 12px;
  width: 80%;
  max-width: 400px;
  text-align: center;
  box-shadow: 0 4px 15px rgba(0,0,0,0.3);
}
.ad-close {
  color: #333;
  float: right;
  font-size: 28px;
  font-weight: bold;
  cursor: pointer;
}
.ad-close:hover {
  color: red;
}
</style>

<script>
window.addEventListener("load", function() {
  let modal = document.getElementById("adModal");
  modal.style.display = "block";
  // Optional auto-close
  setTimeout(() => modal.style.display = "none", 10000);
});
</script