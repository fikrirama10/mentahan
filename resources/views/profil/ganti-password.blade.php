@extends('main')

@section('content')
    <div class="card mb-4">
        <h5 class="card-header">Ganti Password</h5>
        <div class="card-body">
            <form id="formAuthentications" action='{{ route('post.password') }}' method="POST"
                class="fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate">
                @csrf
                <div class="row">
                    <div class="mb-3 col-12 col-sm-6 form-password-toggle fv-plugins-icon-container">
                        <label class="form-label" for="newPassword">Password Baru</label>
                        <div class="input-group input-group-merge has-validation">
                            <input class="form-control" type="password" id="newPassword" name="password"
                                placeholder="············">
                            <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                        </div>
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>

                    <div class="mb-3 col-12 col-sm-6 form-password-toggle fv-plugins-icon-container">
                        <label class="form-label" for="confirmPassword">Konfirmasi Password</label>
                        <div class="input-group input-group-merge has-validation">
                            <input class="form-control" type="password" name="password_confirmation" id="confirmPassword"
                                placeholder="············">
                            <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                        </div>
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                    <div>
                        <button type="button" id='btnregister' class="btn btn-primary me-2 waves-effect waves-light">Change
                            Password</button>
                    </div>
                </div>
                <input type="hidden">
            </form>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        const form = document.querySelector('#formAuthentications');
        var validatorPersonalData = FormValidation.formValidation(
            form, {
                fields: {

                    password: {
                        validators: {
                            notEmpty: {
                                message: 'New Password not empty'
                            }
                        }
                    },
                    'password_confirmation': {
                        validators: {
                            notEmpty: {
                                message: 'New Password Confirm not empty'
                            },
                            identical: {
                                compare: function() {
                                    return form.querySelector('[name="password"]').value;
                                },
                                message: 'The password and its confirm are not the same',
                            },
                        },
                    },

                },

                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap5: new FormValidation.plugins.Bootstrap5({
                        eleValidClass: '',
                        rowSelector: '.mb-3'
                    }),

                    autoFocus: new FormValidation.plugins.AutoFocus()
                },
                init: instance => {
                    instance.on('plugins.message.placed', function(e) {
                        if (e.element.parentElement.classList.contains('input-group')) {
                            e.element.parentElement.insertAdjacentElement('afterend', e.messageElement);
                        }
                    });
                }

            });


        const buttonSubmit = document.getElementById('btnregister');
        buttonSubmit.addEventListener('click', function(e) {
            e.preventDefault();
            if (validatorPersonalData) {
                validatorPersonalData.validate().then(function(status) {
                    if (status == 'Valid') {
                        Swal.fire({
                            text: "Are you sure change password?",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Submit',
                            customClass: {
                                confirmButton: 'btn btn-primary me-1',
                                cancelButton: 'btn btn-label-danger'
                            },
                            buttonsStyling: false
                        }).then((result) => {
                            if (result.isConfirmed) {
                                buttonSubmit.setAttribute('data-kt-indicator', 'on');

                                // Disable button to avoid multiple click
                                buttonSubmit.disabled = true;

                                // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                                setTimeout(function() {
                                    form.submit(); // Submit form
                                }, 1000);
                            }


                        })


                    }
                });
            }
        });
    </script>
@endpush
