<style>
 .alert-soft-accent {
    background-color: rgba(237,11,76,.05);
    border-color: #fabbcd;
}
[dir=ltr] .alert-dismissible {
    padding-right: 2.21875rem;
}
 .alert {
    padding: 0.5rem;
    margin-bottom: 1rem;
    border: 1px solid transparent;
    border-radius: 0.25rem;
}
.alert-soft-accent {
    color: #ed0b4c;
}
.alert {
    position: relative;
}
.fade {
    transition: opacity .15s linear;
}
[dir=ltr] .alert-dismissible .close {
    right: 0;
}
 .alert-dismissible .close {
    padding: 0.5rem;
}
 [type=button]:not(:disabled),  [type=reset]:not(:disabled),  [type=submit]:not(:disabled),  button:not(:disabled) {
    cursor: pointer;
}
 button.close {
    padding: 0;
    background-color: transparent;
    border: 0;
}
[dir=ltr] .close {
    float: right;
}
 .close {
    text-shadow: 0 1px 0 #fff;
}
.alert-dismissible .close {
    position: absolute;
    top: 0;
    z-index: 2;
    color: inherit;
}
 button,  input,  optgroup,  select,  textarea {
    margin: 0;
}
 button {
    border-radius: 0;
}
.close {
    font-size: 1.21875rem;
    font-weight: 500;
    line-height: 1;
    color: #272c33;
    opacity: .5;
}
[type=button], [type=reset], [type=submit], button {
    -webkit-appearance: button;
}
button, select {
    text-transform: none;
}
button, input {
    overflow: visible;
}
button, input, optgroup, select, textarea {
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
}
.align-items-start {
    align-items: flex-start!important;
}
.flex-wrap {
    flex-wrap: wrap!important;
}
.d-flex {
    display: flex!important;
}
*, :after, :before {
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
.alert-soft-accent {
    color: #ed0b4c;
}
.alert-soft-accent {
    color: #ed0b4c;
}
</style>

@if (session('status_success'))


        <div class="flex" style="min-width: 180px">
            <small class="text-black-100">
                <strong> </strong> {{ session('status_success') }}
            </small>
        </div>
    
@endif

@if (session('status_error'))

        <div class="flex" style="min-width: 180px">
            <small class="text-black-100">
                <strong> </strong> {{ session('status_error') }}
            </small>
        </div>
@endif