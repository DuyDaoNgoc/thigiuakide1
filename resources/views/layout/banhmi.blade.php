{{-- file: resources/views/layout/banhmi.blade.php --}}

@php
 use App\Http\Controllers\BanhMiHtmlController;
    use App\Models\BanhMiHtml;
    // Lấy tất cả các bản ghi từ bảng banh_mi_htmls
    $banhMis = BanhMiHtml::all();
@endphp

<div data-mkdf-parallax-speed="1" class="vc_row wpb_row vc_row-fluid mkdf-section mkdf-content-aligment-left" style="">
    <div class="clearfix mkdf-full-section-inner">
      <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-has-fill">
        <div class="vc_column-inner vc_custom_1505498075306">
          <div class="wpb_wrapper">
            <div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_double vc_sep_border_width_2 vc_sep_pos_align_center vc_sep_color_black vc_separator-has-text">
              <span class="vc_sep_holder vc_sep_holder_l"><span class="vc_sep_line"></span></span>
                <h4 class="menu-tt">Bánh mì</h4>
              <span class="vc_sep_holder vc_sep_holder_r"><span class="vc_sep_line"></span></span> 
            </div>
          </div>
        </div>  
      </div>
    </div>
</div>

<div class="hl-food-list vc_row wpb_row vc_row-fluid mkdf-section vc_custom_1447769555653 mkdf-content-aligment-left">
  <div class="clearfix mkdf-full-section-inner">
    <div class="wpb_column vc_column_container vc_col-sm-6">
      <div class="vc_column-inner ">
        <div class="wpb_wrapper">
          <div class="mkdf-menu-list mkdf-ml-with-featured-image">
            <ul class="mkdf-ml-holder">
              @foreach($banhMis as $item)
              <li class="mkdf-ml-item clearfix">
                <div class="mkdf-ml-item-image"> 
                  <a href="{{ $item->detail_url }}">
                    <img width="150" height="150" 
                         src="{{ $item->image_url }}" 
                         alt="{{ $item->name }}" />
                  </a>    
                </div>
                <div class="mkdf-ml-item-content">
                  <div class="mkdf-ml-top-holder">
                    <div class="mkdf-ml-title-holder">
                      <h4 class="mkdf-ml-title">
                        <a href="{{ $item->detail_url }}">
                          {{ $item->name }}
                        </a>
                      </h4>
                    </div>
                    <div class="mkdf-ml-dots"></div>
                    <div class="mkdf-ml-price-holder">
                      <h4 class="mkdf-ml-price">
                        {{ number_format($item->price, 0) }} ₫
                      </h4>
                    </div>
                  </div>
                  <div class="mkdf-ml-bottom-holder clearfix">
                    <div class="mkdf-ml-excerpt-holder">
                      <p>{{ $item->description }}</p>
                    </div>
                  </div>
                </div>
              </li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="hl-food-list vc_row wpb_row vc_row-fluid mkdf-section vc_custom_1447769555653 mkdf-content-aligment-left">
        <div class="clearfix mkdf-full-section-inner">
          <div class="wpb_column vc_column_container vc_col-sm-6">
            <div class="vc_column-inner ">
              <div class="wpb_wrapper">
                <div class="mkdf-menu-list mkdf-ml-with-featured-image">
                  <ul class="mkdf-ml-holder">
                    @foreach($banhMis as $item)
                    <li class="mkdf-ml-item clearfix">
                      <div class="mkdf-ml-item-image"> 
                        <a href="{{ $item->detail_url }}">
                          <img width="150" height="150" 
                               src="{{ $item->image_url }}" 
                               alt="{{ $item->name }}" />
                        </a> 
                      </div>
                      <div class="mkdf-ml-item-content">
                        <div class="mkdf-ml-top-holder">
                          <div class="mkdf-ml-title-holder">
                            <h4 class="mkdf-ml-title">
                              <a href="{{ $item->detail_url }}">
                                {{ $item->name }}
                              </a>
                            </h4>
                          </div>
                          <div class="mkdf-ml-dots"></div>
                          <div class="mkdf-ml-price-holder">
                            <h4 class="mkdf-ml-price">
                              {{ number_format($item->price, 0) }} ₫
                            </h4>
                          </div>
                        </div>
                        <div class="mkdf-ml-bottom-holder clearfix">
                          <div class="mkdf-ml-excerpt-holder">
                            <p>{{ $item->description }}</p>
                          </div>
                        </div>
                      </div>
                    </li>
                    @endforeach
                  </ul>
                </div>
              </div>
            </div>
          </div>
    {{-- Nếu muốn 2 cột, bạn có thể copy tiếp code cột thứ 2, 
       hoặc chia $banhMis ra 2 mảng, tùy ý. --}}
  </div>
</div>
