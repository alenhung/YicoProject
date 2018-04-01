@extends('layouts.app')
@section('sidebar')
  @include('_includes.nav.document-side')
@endsection
@section('content')
  <div class="columns">
    <div class="column">
      @if (session('status'))
          <div class="alert alert-success">
              {{ session('status') }}
          </div>
           @include('shared._errors')
      @endif
      <!--Content-->
      <div class="card">
        <div class="card-content">
          <div class="content">
            <div class="level">
              <div class="level-left">
                <div class="level-item">
                  <h4 class="title is-4"><i class="fa fa-plus m-r-10" aria-hidden="true"></i>公文文號申請</h4>
                </div>
              </div>
              <div class="level-right">
                <div class="level-item">
                  <h6 class="subtitle is-6"></h6>
                </div>
              </div>
            </div>
            <hr>
            <form class="form-horizontal" action="{{route('document.store')}}" enctype="multipart/form-data" method="POST">
              {{ csrf_field() }}
              <div class="columns">
                <div class="column">
                  <!---->
                  <div class="field is-horizontal">
                    <div class="field-label is-normal">
                      <label class="label">公文主旨：</label>
                    </div>
                    <div class="field-body">
                      <div class="field">
                        <div class="control">
                          <input class="input {{ $errors->has('title') ? ' is-danger' : '' }}" type="text" name="title" placeholder="請填入公文主旨">
                        </div>
                        @if ($errors->has('title'))
                            <div class="help-block">
                                {{ $errors->first('title') }}
                            </div>
                        @endif
                      </div>
                    </div>
                  </div>
                  <!---->
                  <!---->
                  <div class="field is-horizontal">
                    <div class="field-label is-normal">
                      <label class="label">公文描述：</label>
                    </div>
                    <div class="field-body">
                      <div class="field">
                        <div class="control">
                          <input class="input {{ $errors->has('description') ? ' is-danger' : '' }}" type="text" name="description" placeholder="請填入公文概要描述">
                        </div>
                        @if ($errors->has('description'))
                            <div class="help-block">
                                {{ $errors->first('description') }}
                            </div>
                        @endif
                      </div>
                    </div>
                  </div>
                  <!---->
                  <!---->
                  <div class="field is-horizontal">
                    <div class="field-label is-normal">
                      <label class="label">來文/受文：</label>
                    </div>
                    <div class="field-body">
                      <div class="control">
                        <template>
                      <section name="from_to">
                        <b-radio name="from_to" v-model="from_options" native-value="與會人員">與會人員</b-radio>
                        <b-radio name="from_to" v-model="from_options" native-value="各主管">各主管</b-radio>
                        <b-radio  name="from_to" v-model="from_options" native-value="manual">自行輸入</b-radio>
                        <div class="control">
                          <input type="text" name="from_to" class="input field {{ $errors->has('from_to') ? ' is-danger' : '' }}" v-if="from_options == 'manual'"  placeholder="請自行輸入受文/來文單位">
                        </div>
                      </section>
                      </template>
                    </div>
                    @if ($errors->has('from_to'))
                        <div class="help-block">
                            {{ $errors->first('from_to') }}
                        </div>
                    @endif
                    </div>

                  </div>
                  <!---->
                  <!---->
                  <div class="field is-horizontal">
                    <div class="field-label is-normal">
                      <label class="label">文件類別：</label>
                    </div>
                    <div class="field-body">
                      <div class="field">
                        <div class="control">
                          <div class="select {{ $errors->has('type') ? ' is-danger' : '' }}">
                            <select name="type">
                              <option value="">請選擇文件類別</option>
                              <option value="I">收文</option>
                              <option value="O">發文</option>
                              <option value="C">用印</option>
                              <option value="L">合約</option>
                              <option value="A">簽呈</option>
                              <option value="T">其他</option>
                            </select>
                          </div>

                        </div>
                        @if ($errors->has('type'))
                            <div class="help-block">
                                {{ $errors->first('type') }}
                            </div>
                        @endif
                      </div>
                    </div>
                  </div>
                  <!---->
                  <!---->
                  <div class="field is-horizontal">
                    <div class="field-label is-normal">
                      <label class="label">處理時效：</label>
                    </div>
                    <div class="field-body">
                      <div class="field">
                        <div class="control">
                          <template>
                            <section name="processing_level">
                                <div class="block">
                                    <b-radio name="processing_level"
                                        native-value="7">
                                        普件（7天）
                                    </b-radio>
                                    <b-radio name="processing_level"
                                        native-value="3">
                                        速件（3天）
                                    </b-radio>
                                    <b-radio name="processing_level"
                                        native-value="1">
                                        最速件（1天）
                                    </b-radio>
                                </div>
                            </section>
                          </template>
                          @if ($errors->has('processing_level'))
                              <div class="help-block">
                                  {{ $errors->first('processing_level') }}
                              </div>
                          @endif
                        </div>
                      </div>
                    </div>
                  </div>
                  <!---->
                  <!---->
                  <div class="field is-horizontal">
                    <div class="field-label is-normal">
                      <label class="label">密等及解密條件：</label>
                    </div>
                    <div class="field-body">
                      <div class="field">
                        <div class="control">
                          <template>
                            <section name="secret_level">
                                <div class="block">
                                    <b-radio name="secret_level"
                                        native-value="1">
                                        傳閱
                                    </b-radio>
                                    <b-radio name="secret_level"
                                        native-value="2">
                                        機密
                                    </b-radio>
                                    <b-radio name="secret_level"
                                        native-value="3">
                                        極機密
                                    </b-radio>
                                </div>
                            </section>
                        </template>
                        @if ($errors->has('processing_level'))
                            <div class="help-block">
                                {{ $errors->first('processing_level') }}
                            </div>
                        @endif
                        </div>
                      </div>
                    </div>
                  </div>
                  <!---->
                  <!---->
                  <div class="field is-horizontal">
                    <div class="field-label is-normal">
                      <label class="label">公文建立日期：</label>
                    </div>
                    <div class="field-body">
                      <div class="field">
                        <div class="control">
                          <template>
                          <b-field>
                              <b-datepicker icon-pack="fa"
                                  placeholder="請點選日期" name="create_at" class="{{ $errors->has('create_at') ? ' is-danger' : '' }}">
                              </b-datepicker>
                          </b-field>
                        </template>
                        </div>
                        @if ($errors->has('create_at'))
                            <div class="help-block">
                                {{ $errors->first('create_at') }}
                            </div>
                        @endif
                      </div>
                    </div>
                  </div>
                  <!---->
                  <div class="field is-horizontal">
                    <div class="field-label is-normal">
                      <label class="label">承辦人：</label>
                    </div>
                    <div class="field-body">
                      <div class="field">
                        <div class="control">
                          <input class="input" name="create_user" type="text" value="{{ Auth::user()->name }}">
                        </div>
                      </div>
                      @if ($errors->has('create_user'))
                          <div class="help-block">
                              {{ $errors->first('create_user') }}
                          </div>
                      @endif
                    </div>

                  </div>
                </div>
              </div>
              <hr>
              <div class="level">
                <div class="level-left">
                  <div class="level-item">
                  </div>
                </div>
                <div class="level-right">
                  <div class="level-item">
                    <button class="button is-primary is-right">送出申請</button>
                  </div>
                </div>
              </div>
              <!--狀態 : 建立-0 / 暫停-1 / 取消-2 / 結案-3-->
              <input type="text" name="status" id="status" value="0" hidden>
              <!--申請帳號 : 使用者帳號ID-->
              <input type="text" name="request_user" id="request_user" value="{{ Auth::user()->id }}" hidden>

            </form>
          </div>
        </div>
      </div>
      <!--Content-->
    </div>
  </div>
@endsection
@section('scripts')

@endsection
