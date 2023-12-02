@extends('layouts/layoutMaster')

@section('title', 'App Settings')

@section('vendor-style')
    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>
@endsection

@section('content')
    <h4 class="py-3 breadcrumb-wrapper mb-4"><span class="text-muted fw-light">Settings/</span> App</h4>

    <!-- Basic Layout -->
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <form action="{{ route('store_settings') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3 col-12">
                          <label class="form-label" for="appname">App Name</label>
                          <input type="hidden" name="type[]" value="appname">
                          <input type="text" id="appname" name="appname" class="form-control" value="{{app_setting('appname')}}" placeholder="JSGroup Company">
                        </div>
                        <div class="d-flex align-items-start align-items-sm-center gap-4 mb-3">
                            <img src="{{ app_setting('logo') ? app_setting('logo') : asset('assets/img/avatars/1.png') }}" alt="user-avatar" class="d-block rounded"
                                height="100" width="100" id="uploadedAvatar">
                            <div class="button-wrapper">
                                <label for="logo" class="btn btn-primary me-2 mb-4" tabindex="0">
                                    <span class="d-none d-sm-block">Upload new photo</span>
                                    <i class="bx bx-upload d-block d-sm-none"></i>
                                    <input type="hidden" name="type[]" value="logo">
                                    <input type="file" id="logo" name="logo" class="logo" hidden=""
                                        accept="image/png, image/jpeg">
                                </label>
                                <button type="button" class="btn btn-label-secondary account-image-reset mb-4">
                                    <i class="bx bx-reset d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Reset</span>
                                </button>

                                <p class="mb-0">Allowed JPG, PNG.</p>
                            </div>
                          </div>

                          <input type="submit" value="Update" class="btn btn-primary">
                    </form>
                </div>
            </div>

        </div>

      <div class="col-md-6">
            <div class="card mb-4">
              <div class="card-body">
                <form action="{{ route('store_settings') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 col-12">
                      <label class="form-label" for="adminemail">Admin Email</label>
                      <input type="hidden" name="type[]" value="adminemail">
                      <input type="text" id="adminemail" name="adminemail" class="form-control" value="{{app_setting('adminemail')}}" placeholder="admin@gmail.com">
                    </div>

                      <input type="submit" value="Update" class="btn btn-primary">
                </form>
              </div>
            </div>
        </div>

        <div class="col-12">
            <div class="card mb-4">
              <div class="card-body">
                <form action="{{ route('store_settings') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 col-12">
                      <label class="form-label" for="appiontment_validation_sms">Appointment Validation SMS</label>
                      <input type="hidden" name="type[]" value="appiontment_validation_sms">
                      <textarea id="appiontment_validation_sms" name="appiontment_validation_sms" rows="6" class="form-control">{{app_setting('appiontment_validation_sms')}}</textarea>
                    </div>

                    <div class="mb-3 col-12">
                      <label class="form-label" for="appiontment_reminder_sms">Reminder SMS(before 24 Hour)</label>
                      <input type="hidden" name="type[]" value="appiontment_reminder_sms">
                      <textarea id="appiontment_reminder_sms" name="appiontment_reminder_sms" rows="6" class="form-control">{{app_setting('appiontment_reminder_sms')}}</textarea>
                    </div>

                    <div class="mb-3 col-12">
                      <label class="form-label" for="appiontment_salesperson_sms">SalesPerson SMS</label>
                      <input type="hidden" name="type[]" value="appiontment_salesperson_sms">
                      <textarea id="appiontment_salesperson_sms" name="appiontment_salesperson_sms" rows="6" class="form-control">{{app_setting('appiontment_salesperson_sms')}}</textarea>
                    </div>

                      <input type="submit" value="Update" class="btn btn-primary">
                </form>
              </div>
            </div>
        </div>
    </div>
@endsection
@section('page-script')
    <script>
        'use strict';

        document.addEventListener('DOMContentLoaded', function(e) {
            (function() {
                // Update/reset user image of account page
                let accountUserImage = document.getElementById('uploadedAvatar');
                const fileInput = document.querySelector('.logo'),
                resetFileInput = document.querySelector('.account-image-reset');

                if (accountUserImage) {
                    const resetImage = accountUserImage.src;
                    fileInput.onchange = () => {
                        if (fileInput.files[0]) {
                            accountUserImage.src = window.URL.createObjectURL(fileInput.files[0]);
                        }
                    };
                    resetFileInput.onclick = () => {
                        fileInput.value = '';
                        accountUserImage.src = resetImage;
                    };
                }
            })();
        });
    </script>
@endsection
