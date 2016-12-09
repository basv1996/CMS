<link rel="stylesheet" href="css/band.css">
<section>
{$i=1}
 {foreach from=$result2 item=oneItem}
 {if $i==0}
 <div id="BandlidLinks">
  <h1>{$oneItem.name}</h1>
  <div id="containerBig">
  <img src={$oneItem.profileImage}>    
  <div class="container">
  <content>{$oneItem.information}</content>
     </div>
    </div>
    </div>
    {$i=1}
    {else}
    <div id="BandlidRechts">
  <h1>{$oneItem.name}</h1>
  <div id="containerBig">
  <img src={$oneItem.profileImage}>    
  <div class="container">
  <content>{$oneItem.information}</content>
        </div>
    </div>
    </div>
    {$i=0}
    {/if}
   {/foreach}
   <div id="videos">
   <div id="video1">
     <h2>Küss Mich Jetzt</h2>
      <iframe id="YTVid" src="https://www.youtube.com/embed/SwvylVmTgGo" frameborder="0" allowfullscreen></iframe>
    </div>
     <div id="video2">
      <h2>Forget My Name ft René Froger</h2>
      <iframe id="YTVid" src="https://www.youtube.com/embed/ETQ-n4FMhCU" frameborder="0" allowfullscreen></iframe> 
   </div>
    </div>
</section>





