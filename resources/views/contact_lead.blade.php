@extends('layouts/client')
@section('content')
    <div class="aur-main-content">
        <div class="aur-flex-between">
            <div class="text-dark aur-font-30 aur-font-700 mb-3">Contacts/Leads</div>
            <div class="aur-flex-start aur-gap-20">
                <div class="btn btn-success aur-btn-success aur-font-14 aur-font-500 non-bd">+ Add New</div>
                <div class="btn btn-success aur-btn-success aur-font-14 aur-font-500 non-bd">+ Import Contacts</div>
            </div>
        </div>
        <div class="aur-contact-leads-wrap">
            <div class="aur-conatact-leads-nabvar aur-flex-start">
                <div class="aur-contact-search-wrap aur-flex-start aur-gap-16">
                    <div>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.7192 18.3129L16.0114 14.6329C17.4506 12.8373 18.1476 10.5582 17.959 8.26415C17.7705 5.97016 16.7106 3.83564 14.9975 2.2995C13.2844 0.76336 11.0481 -0.0576363 8.74862 0.00532409C6.44911 0.0682845 4.26109 1.01042 2.63448 2.638C1.00786 4.26558 0.066292 6.45489 0.00336896 8.75578C-0.059554 11.0567 0.760954 13.2942 2.29618 15.0084C3.83141 16.7225 5.96466 17.783 8.25729 17.9717C10.5499 18.1604 12.8277 17.463 14.6222 16.0229L18.3 19.7029C18.3929 19.7966 18.5035 19.871 18.6253 19.9217C18.747 19.9725 18.8777 19.9987 19.0096 19.9987C19.1415 19.9987 19.2722 19.9725 19.3939 19.9217C19.5157 19.871 19.6263 19.7966 19.7192 19.7029C19.8993 19.5164 20 19.2672 20 19.0079C20 18.7485 19.8993 18.4993 19.7192 18.3129ZM9.01554 16.0229C7.63189 16.0229 6.27932 15.6123 5.12886 14.8431C3.9784 14.074 3.08172 12.9807 2.55223 11.7016C2.02273 10.4226 1.88419 9.01509 2.15412 7.65722C2.42406 6.29935 3.09035 5.05207 4.06873 4.07311C5.04712 3.09414 6.29366 2.42745 7.65072 2.15736C9.00778 1.88726 10.4144 2.02588 11.6927 2.5557C12.9711 3.08551 14.0637 3.98272 14.8324 5.13386C15.6011 6.28501 16.0114 7.63838 16.0114 9.02285C16.0114 10.8794 15.2743 12.6598 13.9623 13.9726C12.6504 15.2854 10.871 16.0229 9.01554 16.0229Z" fill="#E3ECF1"/>
                        </svg>
                    </div>
                    <input type="text" class="aur-contact-search" placeholder="Search or Enter Tag">
                </div>
            </div>
            <div class="aur-conatact-leads-table-wrap">
                <table>
                    <thead>
                        <tr>
                            <th style="width: 50px;"></th>
                            <th>
                                Full Name
                                <svg width="13" height="10" viewBox="0 0 13 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.5 10L12.1292 0.25H0.870835L6.5 10Z" fill="#A4A5A6"/>
                                </svg>
                            </th>
                            <th>
                                Phone Number
                                <svg width="13" height="10" viewBox="0 0 13 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.5 10L12.1292 0.25H0.870835L6.5 10Z" fill="#A4A5A6"/>
                                </svg>
                            </th>
                            <th>
                                Country
                                <svg width="13" height="10" viewBox="0 0 13 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.5 10L12.1292 0.25H0.870835L6.5 10Z" fill="#A4A5A6"/>
                                </svg>
                            </th>
                            <th>
                                Date Added
                                <svg width="13" height="10" viewBox="0 0 13 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.5 10L12.1292 0.25H0.870835L6.5 10Z" fill="#A4A5A6"/>
                                </svg>
                            </th>
                            <th>
                                Tags
                                <svg width="13" height="10" viewBox="0 0 13 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.5 10L12.1292 0.25H0.870835L6.5 10Z" fill="#A4A5A6"/>
                                </svg>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="padding-left: 10px;">
                                <label class="aur-custom-checkbox-wrap">
                                    <input type="checkbox" name="" class="aur-custom-checkbox" >
                                    <span class="checkmark"></span>
                                </label>
                            </td>
                            <td>John Doe</td>
                            <td>+01 234 322 1292</td>
                            <td>1243243234</td>
                            <td>08/04/2022</td>
                            <td class="aur-flex-start aur-gap-16">
                                <div class="aur-tag-purple">outreach</div>
                                <div class="aur-tag-orrange">engage</div>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding-left: 10px;">
                                <label class="aur-custom-checkbox-wrap">
                                    <input type="checkbox" name="" class="aur-custom-checkbox" >
                                    <span class="checkmark"></span>
                                </label>
                            </td>
                            <td>John Doe</td>
                            <td>+01 234 322 1292</td>
                            <td>1243243234</td>
                            <td>08/04/2022</td>
                            <td class="aur-flex-start aur-gap-16">
                                <div class="aur-tag-purple">outreach</div>
                                <div class="aur-tag-orrange">engage</div>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding-left: 10px;">
                                <label class="aur-custom-checkbox-wrap">
                                    <input type="checkbox" name="" class="aur-custom-checkbox" >
                                    <span class="checkmark"></span>
                                </label>
                            </td>
                            <td>John Doe</td>
                            <td>+01 234 322 1292</td>
                            <td>1243243234</td>
                            <td>08/04/2022</td>
                            <td class="aur-flex-start aur-gap-16">
                                <div class="aur-tag-purple">outreach</div>
                                <div class="aur-tag-orrange">engage</div>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding-left: 10px;">
                                <label class="aur-custom-checkbox-wrap">
                                    <input type="checkbox" name="" class="aur-custom-checkbox" >
                                    <span class="checkmark"></span>
                                </label>
                            </td>
                            <td>John Doe</td>
                            <td>+01 234 322 1292</td>
                            <td>1243243234</td>
                            <td>08/04/2022</td>
                            <td class="aur-flex-start aur-gap-16">
                                <div class="aur-tag-purple">outreach</div>
                                <div class="aur-tag-orrange">engage</div>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding-left: 10px;">
                                <label class="aur-custom-checkbox-wrap">
                                    <input type="checkbox" name="" class="aur-custom-checkbox" >
                                    <span class="checkmark"></span>
                                </label>
                            </td>
                            <td>John Doe</td>
                            <td>+01 234 322 1292</td>
                            <td>1243243234</td>
                            <td>08/04/2022</td>
                            <td class="aur-flex-start aur-gap-16">
                                <div class="aur-tag-purple">outreach</div>
                                <div class="aur-tag-orrange">engage</div>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding-left: 10px;">
                                <label class="aur-custom-checkbox-wrap">
                                    <input type="checkbox" name="" class="aur-custom-checkbox" >
                                    <span class="checkmark"></span>
                                </label>
                            </td>
                            <td>John Doe</td>
                            <td>+01 234 322 1292</td>
                            <td>1243243234</td>
                            <td>08/04/2022</td>
                            <td class="aur-flex-start aur-gap-16">
                                <div class="aur-tag-purple">outreach</div>
                                <div class="aur-tag-orrange">engage</div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@push('custom_style')
    <link rel="stylesheet" href="{{asset('css/contact.css')}}">
@endpush
@push('custom_script')
    <script src="{{asset('js/contact.js')}}"></script>
@endpush