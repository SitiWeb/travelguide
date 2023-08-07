<div class="flex justify-center mt-2">
<label>
      <input type="checkbox"  id="termsCheckbox" name="terms_checkbox" required><span  class=" ml-2 graphik-font" style="color:#a5a4a5;"> I accept the 
      <a href="{{route('frontend.terms')}}"  {{ $attributes->merge(['class' => ' text-sm underline text-color-terms text-center']) }} >
    Terms & Conditions
</a></span>
    </label>

</div>