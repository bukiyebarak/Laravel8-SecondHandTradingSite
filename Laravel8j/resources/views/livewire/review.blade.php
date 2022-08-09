<div>
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
    @endif

    <form class="form-body p-3" wire:submit.prevent="store" >
        @csrf
        <h4 class="mb-4">Write a Review</h4>
        <div class="mb-3">
            <label class="form-label">Subject</label>
            <input type="text" wire:model="subject" class="form-control rounded-0">
            @error('subject')<span class="text-danger">{{$message}}</span>@enderror
        </div>
        <div class="mb-3">
            @error('rate')<span class="text-danger">{{$message}}</span>@enderror
            <label class="form-label">Rating</label>
            <div class="rates">
                <input type="radio" id="star5" wire:model="rate"  value="1" /> <label for="star5"></label>
                <input type="radio" id="star4" wire:model="rate"  value="2"/> <label for="star4"></label>
                <input type="radio" id="star3" wire:model="rate" value="3"/> <label for="star3"></label>
                <input type="radio" id="star2" wire:model="rate" value="4"/> <label for="star2"></label>
                <input type="radio" id="star1" wire:model="rate" value="5"/> <label for="star1"></label>

            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Yor Review</label>
            <textarea  wire:model="review" class="form-control rounded-0"
                      rows="3"></textarea>
            @error('review')<span class="text-danger">{{$message}}</span>@enderror

        </div>
        @auth
            <button type="submit" class="btn btn-light btn-ecomm"> Save </button>
        @else
            <a href="/login" class="btn-dark"> For Submit Yor Review, Please Login</a>
        @endauth
    </form>
</div>
