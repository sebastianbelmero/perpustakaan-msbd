<section id="mu-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-contact-area">

                    <div class="mu-heading-area">
                        <h2 class="mu-heading-title">FORM USULAN</h2>
                        <span class="mu-header-dot"></span>
                        <p>
                            Silahkan usulkan buku yang Anda butuhkan dengan mengisi formulir yang telah kami sediakan. Jenis buku yang diusulkan berkaitan dengan kebutuhan buku dalam menunjang pembelajaran atau juga buku yang bersifat umum. Terima kasih
                        </p>
                    </div>

                    <!-- Start Contact Content -->
                    <div class="mu-contact-content">

                        {{-- <div id="form-messages"></div> --}}
                        <form wire:submit.prevent="tambahUsulan" class="mu-contact-form">
                            <div class="form-group">                
                                <input wire:model.defer="judul" type="text" class="form-control" placeholder="Judul" required>
                            </div>
                            <div class="form-group">                
                                <input wire:model.defer="penerbit" type="text" class="form-control" placeholder="Penerbit">
                            </div>
                            <div class="form-group">                
                                <input wire:model.defer="pengarang" type="text" class="form-control" placeholder="Pengarang">
                            </div>
                            <button type="submit" class="mu-send-msg-btn"><span>SUBMIT</span></button>
                        </form>

                    </div>
                    <!-- End Contact Content -->

                </div>
            </div>
        </div>
    </div>
</section>