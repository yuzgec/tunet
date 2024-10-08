@extends('backend.layout.app')
@section('title', 'Hizmet Ekle')
@section('content')

    <div class="col-12 col-md-9">
        <div class="card">
            {{Form::open(['route' => 'service.store', 'enctype' => 'multipart/form-data'])}}

                <div class="card-header d-flex justify-content-between">
                    <x-add title="Hizmet"></x-add>
                    <div>
                        <x-back></x-back>
                        <x-save></x-save>
                    </div>
                </div>

                <ul class="nav nav-tabs" data-bs-toggle="tabs">

                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)

                    <li class="nav-item">
                        <a href="#{{ $localeCode }}" class="nav-link" data-bs-toggle="tab">
                            <img src="/frontend/flag/{{ $localeCode }}.svg" width="20px"><span  style="margin-left:10px">{{ $properties['native'] }}</span>
                        </a>
                    </li>
                    @endforeach

                    <li class="nav-item ms-auto">
                        <a href="#tabs-settings-7" class="nav-link" title="Settings" data-bs-toggle="tab">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                        </a>
                    </li>
                </ul>

                <div class="card-body">
                    <div class="tab-content">
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)

                            <div class="tab-pane @if ($loop->first) show active @endif" id="{{ $localeCode }}">
                                <div class="text-center mb-2">
                                    <img src="/frontend/flag/{{ $localeCode }}.svg" width="20px"><span  style="margin-left:10px">{{ $properties['native'] }} dili ilgili ayarları yapıyorsunuz.</span>
                                </div>
                                <x-form-inputtext label="Başlık Adı Giriniz" name="title:{{ $localeCode }}"/>
                                <x-form-textarea label="Kısa Açıklama" name="short:{{ $localeCode }}"/>

                                <x-form-textarea label="Açıklama" name="desc:{{ $localeCode }}" ck="aciklama{{ $localeCode }}"/>

                                <div class="card-header mb-2">
                                    <h4 class="card-title">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 272 92" width="80" ><path fill="#EA4335" d="M115.75 47.18c0 12.77-9.99 22.18-22.25 22.18s-22.25-9.41-22.25-22.18C71.25 34.32 81.24 25 93.5 25s22.25 9.32 22.25 22.18zm-9.74 0c0-7.98-5.79-13.44-12.51-13.44S80.99 39.2 80.99 47.18c0 7.9 5.79 13.44 12.51 13.44s12.51-5.55 12.51-13.44z"/><path fill="#FBBC05" d="M163.75 47.18c0 12.77-9.99 22.18-22.25 22.18s-22.25-9.41-22.25-22.18c0-12.85 9.99-22.18 22.25-22.18s22.25 9.32 22.25 22.18zm-9.74 0c0-7.98-5.79-13.44-12.51-13.44s-12.51 5.46-12.51 13.44c0 7.9 5.79 13.44 12.51 13.44s12.51-5.55 12.51-13.44z"/><path fill="#4285F4" d="M209.75 26.34v39.82c0 16.38-9.66 23.07-21.08 23.07-10.75 0-17.22-7.19-19.66-13.07l8.48-3.53c1.51 3.61 5.21 7.87 11.17 7.87 7.31 0 11.84-4.51 11.84-13v-3.19h-.34c-2.18 2.69-6.38 5.04-11.68 5.04-11.09 0-21.25-9.66-21.25-22.09 0-12.52 10.16-22.26 21.25-22.26 5.29 0 9.49 2.35 11.68 4.96h.34v-3.61h9.25zm-8.56 20.92c0-7.81-5.21-13.52-11.84-13.52-6.72 0-12.35 5.71-12.35 13.52 0 7.73 5.63 13.36 12.35 13.36 6.63 0 11.84-5.63 11.84-13.36z"/><path fill="#34A853" d="M225 3v65h-9.5V3h9.5z"/><path fill="#EA4335" d="M262.02 54.48l7.56 5.04c-2.44 3.61-8.32 9.83-18.48 9.83-12.6 0-22.01-9.74-22.01-22.18 0-13.19 9.49-22.18 20.92-22.18 11.51 0 17.14 9.16 18.98 14.11l1.01 2.52-29.65 12.28c2.27 4.45 5.8 6.72 10.75 6.72 4.96 0 8.4-2.44 10.92-6.14zm-23.27-7.98l19.82-8.23c-1.09-2.77-4.37-4.7-8.23-4.7-4.95 0-11.84 4.37-11.59 12.93z"/><path fill="#4285F4" d="M35.29 41.41V32H67c.31 1.64.47 3.58.47 5.68 0 7.06-1.93 15.79-8.15 22.01-6.05 6.3-13.78 9.66-24.02 9.66C16.32 69.35.36 53.89.36 34.91.36 15.93 16.32.47 35.3.47c10.5 0 17.98 4.12 23.6 9.49l-6.64 6.64c-4.03-3.78-9.49-6.72-16.97-6.72-13.86 0-24.7 11.17-24.7 25.03 0 13.86 10.84 25.03 24.7 25.03 8.99 0 14.11-3.61 17.39-6.89 2.66-2.66 4.41-6.46 5.1-11.65l-22.49.01z"/></svg>
                                        Seo Bilgileri - {{ $properties['native'] }}
                                    </h4>
                                </div>
                                <x-form-inputtext label="Seo Başlık" name="seo1:{{ $localeCode }}"/>
                                <x-form-inputtext label="Seo Açıklama" name="seo2:{{ $localeCode }}"/>
                                <x-form-inputtext label="Seo Anahtar Kelime " name="seo3:{{ $localeCode }}"/>

                            </div>
                        @endforeach
                    </div>

            </div>

        </div>
    </div>

    <div class="col-12 col-md-3">

        <div class="card">
            <div class="card-header">
                <h4 class="card-title">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="15" y1="8" x2="15.01" y2="8" /><rect x="4" y="4" width="16" height="16" rx="3" /><path d="M4 15l4 -4a3 5 0 0 1 3 0l5 5" /><path d="M14 14l1 -1a3 5 0 0 1 3 0l2 2" /></svg>
                    Kapak Resim
                </h4>
            </div>

            <div class="p-2">
                <x-form-file label="" name="image"></x-form-file>
            </div>
        </div>

        <div class="card mt-2" >
            <div class="card-header">
                <h4 class="card-title">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 4h4l3 3h7a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2" /><line x1="9" y1="13" x2="15" y2="13" /></svg>
                    Galeri
                    <br><span style="font-size: 12px">Birden fazla resim yükleyebilirsiniz</span>
                </h4>
            </div>
            <div class="p-2">
                <input type="file" name="gallery[]" multiple class="form-control">
                @if($errors->has('gallery'))
                    <div class="invalid-feedback" style="display: block">{{$errors->first('gallery')}}</div>
                @endif
            </div>
        </div>

        <div class="card mt-2" >
            <div class="card-header">
                <h4 class="card-title">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 4h4l3 3h7a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2" /><line x1="9" y1="13" x2="15" y2="13" /></svg>
                    Kategori
                </h4>
            </div>
            <div class="form-group mb-3 row">
                <div class="col-10 offset-1 mt-1">
                    <select class="form-control" data-placeholder="Kategori Seçiniz"  name="category">
                        @foreach($Kategori as $item)
                            <option value="{{ $item->id }}">
                                {{ $item->title }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

    </div>
    {{Form::close()}}
@endsection

@section('customJS')
    @include('backend.layout.ck')

@endsection
