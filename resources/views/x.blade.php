@extends('layouts.main')
<form action="/simpanuser" method="get">
     @csrf
     <div class="form-check pl-5">
          <input class="form-check-input" type="checkbox" value="auto" name="special[]">
          <label class="form-check-label">
              Auto
          </label>
      </div>
      <div class="form-check pl-5">
          <input class="form-check-input" type="checkbox" value="manual" name="special[]">
          <label class="form-check-label">
              Manual
          </label>
      </div>

      <div class="form-check pl-5">
          <input class="form-check-input" type="checkbox" value="semi" name="special[]">
          <label class="form-check-label">
              Semi
          </label>
      </div>
     <button class="btn btn-primary pl-5 ml-3" type="submit"> Kirim </button>
</form>
