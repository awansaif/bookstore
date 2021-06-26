<x-alert-message />
<form wire:submit.prevent="savePublicMessage">
    <div class="row mt-5">
        <div class="col-md-6">
            <div class="form-group input-boder">
                <input type="text" wire:model="name" class="form-control" placeholder="Your Name">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group input-boder">
                <input type="text" wire:model="email" class="form-control" placeholder="Enter Mail">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <textarea wire:model="message" class="form-control" placeholder="Write Message" id="" cols="30"
                    rows="7"></textarea>
            </div>
        </div>
        <div class="col-md-12 text-center">
            <button class="btn btn-checkout">Send</button>
        </div>
    </div>
</form>
