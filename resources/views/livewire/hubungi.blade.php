<div class="contact">
   <div class="container">
      <div class="row">
          <div class="col-md-12">
               <div class="titlepage text_align_left">
                  <h2>Hubungi</h2>
               </div>
            </div>
      </div>
      <div class="row">
         <div class="col-md-6">
            <form wire:submit.prevent="tambahSaran" class="main_form">
               <div class="row">
                  <div class="col-md-12 ">
                     <input type="text" wire:model.defer="nama" class="contactus" placeholder="Nama Lengkap">
                  </div>
                  <div class="col-md-12">
                     <input type="email" wire:model.defer="email" class="contactus" placeholder="Email">
                  </div>
                  <div class="col-md-12">
                     <textarea wire:model.defer="pesan" class="textarea" placeholder="Saran dan Masukan"></textarea>
                  </div>
                  <div class="col-md-12">
                     <button type="submit" class="send_btn mb-5">Kirim</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>