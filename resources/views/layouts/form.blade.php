<div class="col-sm-12">
    <div class="mb-3">
        <h2>{{@$child->title ?: $dictionary->getValue('form-baslik')}}</h2>
    </div>
    <form class="wpcf7-form contact-form {{@$class ? : 'bg-white mt-100'}} rmt-0 form-contact">
        <div class="alert alert-contact-form"></div>
        @csrf
        <div class="row">
            <div class="col-md-4">
                <div class="wpcf7-form-control-wrap your-name">
                    <input type="text" name="full_name" value="" class="wpcf7-form-control full_name" required="" placeholder="{{$dictionary->getValue('input-ad-soyad')}}" maxlength="150"/>
                </div>
            </div>
            <div class="col-md-4">
                <div class="wpcf7-form-control-wrap your-phone">
                    <input type="tel" name="phone" value="" class="wpcf7-form-control phone" placeholder="{{$dictionary->getValue('input-telefon')}}" maxlength="15"/>
                </div>
            </div>
            <div class="col-md-4">
                <div class="wpcf7-form-control-wrap your-email">
                    <input type="email" name="email" value="" class="wpcf7-form-control email" required="" placeholder="{{$dictionary->getValue('input-email')}}" maxlength="150"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="wpcf7-form-control-wrap your-message">
                    <textarea name="message" class="wpcf7-form-control message" rows="4" required="" placeholder="{{$dictionary->getValue('input-mesaj')}}" maxlength="255"></textarea>
                </div>
                <br />
                <input type="submit" value="{{$dictionary->getValue('buton-gonder')}}" class="wpcf7-form-control btn-contact-form" />
            </div>
        </div>
    </form>
</div>

