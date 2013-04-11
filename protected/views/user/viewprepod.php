<?php
if (isset($_GET['sect'])) {
  $sect = $_GET['sect'];
} else {
  $sect = 'profile';
}
?>
<?php
if (isset($_GET['id'])) {
  $get_id = $_GET['id'];
} else {
  $get_id = '0';
}
;
?>
<script>
  $(function(){
    $("select.select_week").change(function () {
      alert($(this).attr('value'));
    })
    $('.slide_menu ul li[tab="<?php echo $sect ?>"]').addClass('active');
    openTab('<?php echo $sect ?>');
        
    var url = '/user/ViewProfile/';
        
    if("addEventListener" in window) { 
        
      window.addEventListener('popstate', function(e){
        if(e.state != undefined)
          openTab(e.state);
      }, false);

    } else if ("attachEvent" in window) { 
      // выполнится для IE8 и ниже 
      window.attachEvent('popstate', function(e){
        if(e.state != undefined)
          openTab(e.state);
      }, false); 
    } 
  
    function strpos (haystack, needle, offset) {
      var i = (haystack + '').indexOf(needle, (offset || 0));
      return i === -1 ? false : i;
    }
    $('.slide_menu ul li').click(function(){
      var tab = $(this).attr('tab');
      openTab(tab);
      //history.pushState(tab, '', url+'?sect='+tab );            
    });
        
        
    $('.slide_menu ul li').live('click', function (){
            
      $('.slide_menu ul li').removeClass('active'); 
      $(this).addClass('active');
    });
  });
</script>

<?php if ($user_author->banned == 1): ?>
  <div class="ban"></div>
<?php endif; ?>
<?php if (!is_null($user_author->laste_enter)): ?>
  <div class="laste_enter">
    <div class="clock">
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="100%" height="100%" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
        <path d="M50,89.836c-23.389,0-42.418-19.027-42.418-42.417C7.582,24.029,26.611,5,50,5c23.389,0,42.418,19.029,42.418,42.419  C92.418,70.809,73.389,89.836,50,89.836z M50,9.912c-20.681,0-37.506,16.826-37.506,37.508c0,20.681,16.826,37.505,37.506,37.505  s37.507-16.824,37.507-37.505C87.507,26.737,70.681,9.912,50,9.912z"/>
        <path d="M50.001,49.875c-0.141,0-0.283-0.011-0.427-0.037c-1.173-0.206-2.03-1.226-2.03-2.419V29.442c0-1.355,1.1-2.456,2.456-2.456  c1.355,0,2.456,1.1,2.456,2.456v4.003l5.431-14.974c0.464-1.274,1.872-1.937,3.146-1.471c1.274,0.462,1.934,1.871,1.471,3.146  l-10.195,28.11C51.952,49.241,51.019,49.875,50.001,49.875z"/>
        <circle cx="49.999" cy="12.956" r="1.617"/>
        <path d="M50,14.778c-1.006,0-1.823-0.817-1.823-1.823c0-1.005,0.817-1.823,1.823-1.823c1.004,0,1.821,0.817,1.821,1.823  C51.821,13.961,51.004,14.778,50,14.778z M50,11.542c-0.779,0-1.414,0.635-1.414,1.413c0,0.779,0.635,1.414,1.414,1.414  s1.412-0.635,1.412-1.414C51.412,12.177,50.779,11.542,50,11.542z"/>
        <circle cx="34.343" cy="20.301" r="1.47"/>
        <path d="M23.617,30.488c0.703,0.409,0.945,1.305,0.537,2.008c-0.405,0.704-1.305,0.947-2.007,0.538  c-0.703-0.403-0.945-1.305-0.539-2.008C22.016,30.325,22.913,30.085,23.617,30.488z"/>
        <circle cx="15.536" cy="47.42" r="1.618"/>
        <path d="M15.536,49.242c-1.006,0-1.823-0.817-1.823-1.823c0.001-1,0.819-1.819,1.823-1.822c1.006,0,1.823,0.817,1.823,1.822  C17.359,48.425,16.542,49.242,15.536,49.242z M15.536,46.006c-0.777,0.003-1.412,0.636-1.414,1.413c0,0.779,0.635,1.414,1.414,1.414  s1.413-0.635,1.413-1.414C16.949,46.641,16.315,46.006,15.536,46.006z"/>
        <path d="M22.147,61.803c0.705-0.406,1.602-0.167,2.007,0.537c0.408,0.703,0.166,1.602-0.537,2.008  c-0.704,0.406-1.604,0.163-2.008-0.537C21.202,63.104,21.447,62.209,22.147,61.803z"/>
        <path d="M33.07,73.803c0.408-0.706,1.305-0.946,2.008-0.537c0.704,0.403,0.945,1.302,0.538,2.005  c-0.405,0.704-1.307,0.947-2.007,0.537C32.904,75.402,32.667,74.507,33.07,73.803z"/>
        <path d="M48.382,81.884c0-0.896,0.725-1.618,1.618-1.618c0.892-0.003,1.618,0.723,1.618,1.618c0,0.892-0.728,1.618-1.618,1.618  C49.104,83.498,48.385,82.775,48.382,81.884z"/>
        <path d="M50,83.706L50,83.706c-1.002-0.003-1.819-0.82-1.823-1.822c0-1.006,0.817-1.823,1.823-1.823  c1.007,0,1.822,0.817,1.822,1.823C51.822,82.889,51.006,83.706,50,83.706z M50.006,80.47c-0.785,0-1.42,0.635-1.42,1.414  c0.003,0.775,0.637,1.41,1.414,1.413c0.78,0,1.413-0.635,1.413-1.413C51.413,81.104,50.782,80.47,50.006,80.47z"/>
        <path d="M64.385,75.271c-0.408-0.703-0.167-1.602,0.537-2.005c0.702-0.409,1.601-0.169,2.008,0.537  c0.406,0.7,0.163,1.603-0.539,2.005C65.686,76.214,64.791,75.971,64.385,75.271z"/>
        <path d="M76.384,64.348c-0.704-0.406-0.945-1.305-0.537-2.008c0.402-0.704,1.301-0.943,2.006-0.537  c0.704,0.402,0.945,1.308,0.539,2.008C77.98,64.511,77.087,64.751,76.384,64.348z"/>
        <path d="M84.464,49.038c-0.896-0.003-1.618-0.726-1.618-1.618c-0.001-0.892,0.723-1.618,1.618-1.618  c0.893-0.003,1.618,0.726,1.618,1.618C86.077,48.315,85.356,49.034,84.464,49.038z"/>
        <path d="M84.464,49.242L84.464,49.242c-1.006-0.003-1.822-0.822-1.822-1.823c-0.002-0.486,0.188-0.943,0.532-1.287  c0.344-0.345,0.803-0.535,1.29-0.535c1.007,0,1.822,0.817,1.822,1.822C86.282,48.422,85.463,49.239,84.464,49.242z M84.471,46.006  c-0.386,0-0.74,0.147-1.008,0.416c-0.267,0.267-0.412,0.621-0.412,0.998c0,0.777,0.635,1.41,1.413,1.414  c0.775-0.003,1.408-0.638,1.413-1.415C85.877,46.641,85.246,46.006,84.471,46.006z"/>
        <path d="M77.853,33.034c-0.705,0.409-1.604,0.166-2.006-0.538c-0.408-0.7-0.168-1.599,0.537-2.008  c0.701-0.406,1.604-0.163,2.008,0.537C78.795,31.732,78.553,32.627,77.853,33.034z"/>
        <path d="M66.93,21.036c-0.407,0.704-1.308,0.943-2.008,0.537c-0.704-0.403-0.945-1.305-0.537-2.008  c0.404-0.703,1.306-0.943,2.006-0.537C67.095,19.437,67.333,20.333,66.93,21.036z"/>
      </svg>
    </div>
    <div class="ajkll">
      Последний визит <?php echo date('d-m-y G:i', $user_author->laste_enter); ?>
    </div>
  </div>
<?php endif; ?>
<div class="carma" title="">
  <div class="table_t">
    <div class="tr_t">
      <div class="td_t">
        <div class="carma_plus">
          <?php
          if (isset($profile->plus)) {
            echo '+' . $profile->plus;
          } else {
            echo "0";
          }
          ?>
        </div>
      </div>
      <div class="td_t">
        <div class="slesh">/</div>
      </div>
      <div class="td_t">
        <div class="carma_minus">
          <?php
          if (isset($profile->minus)) {
            echo '-' . $profile->minus;
          } else {
            echo "0";
          }
          ?>
        </div>
      </div>
    </div>
  </div>


</div>
<div class="slide_menu">
  <ul class="">
    <li tab="profile">
      Профайл
      <div></div>
    </li>

  </ul>
</div>

<div id="razdel" class="ent-razdel fix_ent_razd" tab="profile" style="display: none;">
  <div class="name_page">
    <?php
    if (isset($profile->patronymic)) {
      $otchestvo = ' ' . $profile->patronymic . ' ';
    } else {
      $otchestvo = ' ';
    }
    ?>
    <?php echo $profile->name . $otchestvo . $profile->surname; ?>
  </div>
  <div class="table_t editprofile">
    <div class="tr_t">
      <div class="td_t">

        <div class="lft_b resume__emptyblock">

          <div class="avatar">
            <?php
            $picter = Yii::app()->createAbsoluteUrl('i/avatar.svg');
            if (!empty($profile->file_id)) {
              $file_name = $profile->uploadedfiles->name;
              $picter = Yii::app()->createAbsoluteUrl('uploads/avatar/avatar_' . $file_name);
            }
            ?>
            <img src="<?php echo $picter; ?>" />
          </div>

          <div class="avatar_wind">

          </div>
        </div>
        <div class="anchor"></div>

      </div>



      <div class="td_t">
        <?php
        if (
                !empty($profile->pthon) ||
                !empty($profile->kontakt_email) ||
                !empty($profile->website) ||
                !empty($profile->kontact) ||
                !empty($profile->skype)
        ):
          ?>
          <div class="right_b resume__emptyblock">
            <ul class="social_contact">
              <?php if (isset($profile->pthon) && $profile->pthon != ''): ?>
                <li>
                  <label class="social_img thone_c"  title="Контактактный телефон">
                    <?php echo $profile->pthon; ?>
                  </label>
                </li>
              <?php endif; ?>
              <?php if (isset($profile->kontakt_email) && $profile->kontakt_email != ''): ?>
                <li>
                  <label class="social_img email_c" title="Контактактный адрес эл. почты">
                    <?php echo $profile->kontakt_email; ?>
                  </label>
                </li>
              <?php endif; ?>
              <?php if (isset($profile->website) && $profile->website != ''): ?>
                <li>
                  <label class="social_img web_c" title="Веб сайт">
                    <a href="http://<?php echo $profile->website; ?>" class="classic"><?php echo $profile->website; ?></a>
                  </label>
                </li>
              <?php endif; ?>
              <?php if (isset($profile->kontact) && $profile->kontact != ''): ?>
                <li>
                  <label class="social_img vk_c" title="Вконтакте">
                    <a class="classic" href="http://<?php echo $profile->kontact; ?>"><?php echo $profile->kontact; ?></a>
                  </label>
                </li>
              <?php endif; ?>
              <?php if (isset($profile->skype) && $profile->skype != ''): ?>
                <li>
                  <label class="social_img skype_c" title="Скайп">
                    <?php echo $profile->skype; ?>
                  </label>
                </li>
              <?php endif; ?>
            </ul>
          </div>
        <?php endif; ?>
        <?php if (!empty($profile->private)): ?>
          <div class="resume__emptyblock">
            <?php echo nl2br(CHtml::encode($profile->private)); ?>
          </div>
        <?php endif; ?>
        <?php if (!empty($predmetprepod)): ?>
          <div class="resume__emptyblock">
            Переподоваемые предметы
            <div>
              <?php foreach ($predmetprepod as $predmet): ?>
                <?php echo CHtml::link($predmet->predmet_prepod->name, Yii::app()->urlManager->createUrl('/library/predmet', array('id' => $predmet->predmet_id)), array('class' => 'classic')); ?>
              <?php endforeach; ?>
            </div>
          </div>
        <?php endif; ?>
      </div>
    </div>
    <div class="tr_t">
      <div class="td_t"></div>
      <div class="td_t">
        <?php if (!is_null(Yii::app()->user->id)) : ?>

          <div class="this_day">
            <div class="write_small_post">
              <div class="table_t ">
                <div class="tr_t">
                  <div class="td_t wsp">
                    <div class="my_p ">
                      <?php
                      $my_picter = Yii::app()->createAbsoluteUrl('i/mini_avatar.png');
                      if (!is_null($athor->file_id)) {
                        $file_name = $athor->uploadedfiles->name;
                        $my_picter = Yii::app()->createAbsoluteUrl('uploads/avatar/mini_' . $file_name);
                      }
                      ?>
                      <?php echo CHtml::link("<img  src='$my_picter' />", Yii::app()->urlManager->createUrl('/user/ViewProfile', array('id' => $profile->id)), array('class' => 'classic')); ?>
                    </div>
                  </div>
                  <div class="td_t">
                    <div class="my_t">
                      <div name="dolghnost"  id='disifen' class="div_textare"  contentEditable="true" ></div>
                      <div class="inp_sub" id="new_obs" onclick="NewSmallPost(<?php echo $type; ?>,<?php echo $profile->id; ?>)">Отправить</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="anchor"></div>
            <div class="small_posts_view">
              <?php
              if (!empty($discussions)) {
                foreach ($discussions as $discussion) {
                  if ($discussion->parent_id == NULL)
                    $this->renderPartial('application.views.user._small_post', array(
                        'discussion' => $discussion,
                        'type' => $type,
                        'plus' => $plus,
                        'minus' => $minus,
                        'profile' => $athor,
                        'hozyin' => $profile
                            )
                    );
                }
              } else {
                echo 'Еще никто ничего не написал.';
              }
              ?>
            </div>
            <div class="float_signal" const_type="<?php echo $type; ?>"></div>
            <div id="razdel2" class="ent-razdel fix_ent_razd" tab="classmate" style="display: none;">
              <div class="students">
                <?php foreach ($profiles as $classmate) : ?>
                  <div class="student_vew">
                    <?php
                    if ($classmate->leader == 1) {
                      echo '<div class="web_staroste" >Администратор группы</div>';
                    }
                    ?>
                    <?php
                    $picter = Yii::app()->createAbsoluteUrl('i/mini_avatar.png');
                    if (!is_null($classmate->file_id)) {
                      $file_name = $classmate->uploadedfiles->name;
                      $picter = Yii::app()->createAbsoluteUrl('uploads/avatar/mini_' . $file_name);
                    }
                    ?>
                    <?php echo CHtml::link("<img  src='$picter' />", Yii::app()->urlManager->createUrl('/user/ViewProfile', array('id' => $classmate->id)), array('class' => 'classic userabyl')); ?>
                    <?php echo CHtml::link($classmate->surname . '&nbsp;' . $classmate->name, Yii::app()->urlManager->createUrl('/user/ViewProfile', array('id' => $classmate->id)), array('class' => 'classic usename_st')); ?>
                    <?php if ($profile->leader != NUll): ?>
                      <div class="delete_in_group" onclick="ClassmateBlokked(<?php echo $classmate->id ?>, $(this))" title="Заморозить">
                        <svg xmlns:dc="" xmlns:cc="" xmlns:rdf="" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" width="100%" height="100%" viewBox="0 0 80 80" version="1.1" id="svg2" inkscape:version="0.48.2 r9819" sodipodi:docname="snowflake.svg">
                          <metadata id="metadata10">
                            <rdf:RDF>
                              <cc:Work rdf:about="">
                                <dc:format>image/svg+xml</dc:format>
                                <dc:type rdf:resource=""/>
                              </cc:Work>
                            </rdf:RDF>
                          </metadata>
                          <defs id="defs8"/>
                          <sodipodi:namedview pagecolor="#ffffff" bordercolor="#666666" borderopacity="1" objecttolerance="10" gridtolerance="10" guidetolerance="10" inkscape:pageopacity="0" inkscape:pageshadow="2" inkscape:window-width="1053" inkscape:window-height="480" id="namedview6" showgrid="false" inkscape:zoom="2.7918669" inkscape:cx="82.357192" inkscape:cy="53.13918" inkscape:window-x="366" inkscape:window-y="132" inkscape:window-maximized="0" inkscape:current-layer="svg2"/>
                          <path style="fill:#0033FF;stroke:#000000;stroke-width:0.01411415" d="m 39.9,77.809758 c -0.235637,0.0093 -0.462651,-0.02222 -0.675,-0.1 -0.673105,-0.141427 -1.01795,-0.748433 -1.05,-1.3 -0.09616,-1.753698 -0.025,-3.510444 -0.025,-5.25 -0.929526,0.466711 -1.806369,0.946432 -2.8,1.3 -0.641052,0.254569 -1.47371,-0.081 -1.65,-0.675 -0.224368,-0.579852 0.237161,-1.067147 0.75,-1.35 1.217999,-0.62228 2.562132,-1.050435 3.7,-1.8 0.09616,-2.078981 0.04808,-4.196019 0,-6.275 -0.657079,0.367711 -1.414079,0.680004 -1.975,1.175 -0.256419,0.721279 -0.04295,1.489579 -0.075,2.225 0.03205,0.890992 0.287869,2.080004 -0.85,2.575 -0.544894,0.02829 -1.29871,-0.123434 -1.475,-0.675 -0.160262,-0.947563 -0.12692,-1.913293 -0.175,-2.875 -2.468053,1.216275 -4.808869,2.640296 -7.325,3.8 -0.641053,0.339427 -1.523711,0.03642 -1.7,-0.6 -0.320526,-0.919277 0.760868,-1.368145 1.45,-1.75 2.179578,-1.117276 4.322347,-2.311013 6.55,-3.4 -1.169921,-0.537423 -2.499316,-0.889577 -3.525,-1.625 -0.689131,-0.820278 0.417263,-2.04171 1.475,-1.575 1.618657,0.395996 3.043526,1.213577 4.55,1.85 1.057737,-0.537424 2.108289,-1.098434 3.15,-1.65 -0.09615,-1.951697 0.02116,-3.912445 -0.075,-5.85 -2.884737,1.456701 -5.715264,2.975871 -8.6,4.475 -0.689131,0.282855 -1.530736,0.781853 -2.3,0.4 -0.9135,-0.282855 -1.37116,-1.193864 -1.275,-2 -0.08013,-2.842689 0.0391,-5.682312 -0.025,-8.525 -2.115473,1.004134 -4.166579,2.100153 -6.25,3.175 0.04808,0.947564 -0.08334,1.930723 0.125,2.85 0.881447,0.848563 2.395474,0.918864 3.325,1.725 0.673106,0.636423 -0.03137,1.891427 -1.025,1.75 -0.849395,-0.226284 -1.61471,-0.635575 -2.4,-0.975 -0.0641,2.503263 0.147447,5.03588 -0.125,7.525 -0.320527,0.961707 -2.137816,0.789991 -2.25,-0.2 -0.12821,-2.446692 0.01411,-4.903309 -0.05,-7.35 -0.977604,0.339424 -1.88521,0.989151 -2.975,0.975 -0.961579,-0.197999 -1.13529,-1.433289 -0.35,-1.9 1.04171,-0.62228 2.219185,-1.008289 3.325,-1.475 l 0,-1.725 c -1.746868,0.905135 -3.487105,1.801436 -5.25,2.65 -0.04808,1.499129 0.05834,3.015014 -0.15,4.5 -0.3045,0.905131 -2.000632,0.844277 -2.225,-0.075 -0.144236,-1.032419 -0.051922,-2.078437 -0.1,-3.125 -1.7949472,0.777851 -3.4390264,1.850435 -5.25,2.6 -0.4807893,0.18385 -1.1192106,0.46114 -1.6,0.15 -1.2019735,-0.381853 -1.2718419,-2.019147 -0.15,-2.5 1.7468682,-0.961705 3.5691581,-1.824152 5.3,-2.8 -1.073763,-0.494995 -2.2454739,-0.87115 -3.175,-1.55 -0.7051579,-0.806136 0.4172632,-2.030853 1.475,-1.55 1.5064735,0.509137 2.8916056,1.256005 4.35,1.85 1.650711,-0.890992 3.381342,-1.652437 5,-2.6 -0.512842,-0.438424 -1.157026,-0.724718 -1.75,-1.05 -1.298131,0.636423 -2.546736,1.37672 -3.925,1.9 -1.0897896,0.424283 -2.0102894,-0.917864 -1.225,-1.625 0.7372104,-0.650566 1.718552,-1.008289 2.6,-1.475 -2.323816,-1.357702 -4.8351582,-2.456441 -7.175,-3.8 -0.657079,-0.353569 -0.6929736,-1.264861 -0.1,-1.675 0.5769473,-0.438424 1.414079,-0.107854 1.975,0.175 2.1956048,1.088991 4.379395,2.232725 6.575,3.35 0,-0.890991 -0.01924,-1.783999 0.125,-2.675 0.288475,-0.890983 2.12179,-0.939991 2.25,0.05 0.11218,1.258703 0.025,2.527155 0.025,3.8 1.04171,0.608137 2.126237,1.159292 3.2,1.725 1.843026,-0.905133 3.640948,-1.89815 5.5,-2.775 -2.147526,-1.414272 -4.386447,-2.69987 -6.55,-4.1 -0.737209,-0.46671 -1.43013,-1.173151 -1.35,-2.05 0.384632,-0.989991 1.493552,-1.52772 2.375,-2.15 2.147525,-1.414274 4.252474,-2.896583 6.4,-4.325 -1.810973,-1.131417 -3.840948,-1.950153 -5.7,-3.025 -1.234026,0.622281 -2.482001,1.22772 -3.7,1.85 0,1.117275 0.01218,2.246866 -0.1,3.35 -0.09616,0.650566 -1.178186,0.959139 -1.675,0.45 -1.041711,-0.494996 -0.500631,-1.754721 -0.725,-2.575 -2.147526,1.004133 -4.2024736,2.145866 -6.35,3.15 -0.6731053,0.381853 -1.7096053,0.263707 -1.95,-0.5 -0.3686053,-0.749565 0.342921,-1.328003 1,-1.625 2.0673944,-0.975849 4.0595272,-2.059008 6.175,-2.95 -0.801315,-0.438424 -1.7839472,-0.70272 -2.425,-1.325 -0.6410528,-0.735423 0.2993256,-1.960137 1.325,-1.55 1.169921,0.353568 2.180079,0.996432 3.35,1.35 0.929526,0.099 1.719843,-0.447433 2.425,-0.9 -1.95521,-1.032419 -3.937737,-2.056724 -5.925,-3.075 -1.250052,0.707136 -2.4839212,1.471149 -3.75,2.15 -0.4647631,0.226283 -1.0922895,0.325283 -1.525,0 -0.560921,-0.395996 -0.5448947,-1.229004 0,-1.625 0.8814473,-0.664709 1.9204738,-1.131006 2.85,-1.725 -1.8109735,-0.947563 -3.7121054,-1.817582 -5.475,-2.85 -1.34621032,-0.905135 -0.011605,-3.028851 1.575,-2.35 2.0193155,0.721279 3.7287634,1.943864 5.7,2.75 0.032053,-0.919277 0.00577,-1.855725 0.15,-2.775 0.3045,-0.905131 2.000633,-0.844277 2.225,0.075 0.22437,1.315274 0.0359,2.695584 0.1,4.025 1.778921,0.862707 3.521079,1.773151 5.3,2.65 l -0.175,-1.35 c -1.009658,-0.834422 -2.415342,-1.226436 -3.425,-2.075 -0.705158,-0.636423 -0.0026,-1.827285 0.975,-1.7 0.929527,0.254569 1.741632,0.73986 2.575,1.15 0.04808,-2.234551 -0.05513,-4.479592 0.025,-6.7 -0.08013,-0.509137 0.140999,-1.155288 0.75,-1.325 0.721183,-0.296997 1.60897,0.207007 1.625,0.9 0.09616,2.375979 -0.03013,4.784879 0.05,7.175 0.897473,-0.452568 1.669185,-1.245709 2.775,-1.175 0.849395,0.197999 1.191053,1.223433 0.55,1.775 -0.9135,0.876848 -2.395474,1.148151 -3.325,2.025 -0.16027,0.806135 -0.01795,1.654721 -0.05,2.475 2.083421,1.074847 4.134527,2.195867 6.25,3.2 0.06411,-2.842688 -0.06218,-5.682311 0.05,-8.525 -0.256421,-1.343559 1.724948,-2.551849 2.975,-1.675 2.980895,1.824412 6.067816,3.4943 9.225,5.05 0,-2.064837 -0.02308,-4.110162 0.025,-6.175 -0.01603,-0.353568 0.01668,-0.841144 -0.4,-1.025 -1.009658,-0.537423 -2.092263,-0.922432 -3.15,-1.375 -0.849395,0.707138 -1.665342,1.473433 -2.675,2.025 -0.897474,0.339427 -1.986553,-0.451436 -1.65,-1.3 0.480788,-0.749565 1.369843,-1.231005 2.075,-1.825 -2.452025,-1.131419 -4.971052,-2.172869 -7.375,-3.375 -1.089789,-0.56571 -0.282105,-2.319995 1,-1.825 2.660368,0.93342 5.046684,2.345867 7.675,3.35 -0.0641,-0.890993 -0.08013,-1.809008 0,-2.7 0.112184,-0.438424 0.642289,-0.651 1.075,-0.75 0.641051,-0.08486 1.21795,0.423433 1.25,0.975 0.06411,1.216274 0.08205,2.433727 0.05,3.65 l 2.05,0.875 c 0.0641,-1.86684 0.0641,-3.73316 0,-5.6 -1.410316,-0.551565 -2.842896,-1.050436 -4.125,-1.8 -0.721185,-0.509139 -0.297474,-1.676 0.6,-1.775 1.298131,0.08486 2.389052,0.793147 3.575,1.175 -0.03206,-1.357701 0.0641,-2.717296 0,-4.075 0.03205,-0.551564 -0.127578,-1.169147 0.225,-1.65 0.352579,-0.608132 1.301895,-0.730568 1.975,-0.575 0.689132,0.169714 1.05,0.806007 1.05,1.4 0.03205,1.583987 0.03205,3.166016 0,4.75 0.753237,-0.353568 1.480737,-0.749716 2.25,-1.075 0.609,-0.240425 1.423709,0.07015 1.6,0.65 0.240394,0.579852 -0.253185,1.067146 -0.75,1.35 -0.993632,0.579852 -2.040343,1.062576 -3.05,1.6 -0.11218,1.796127 -0.05,3.578873 -0.05,5.375 0.48079,-0.25457 1.287816,-0.33429 1.4,-0.9 0.288477,-1.343559 -0.278868,-2.773869 0.25,-4.075 0.384632,-0.777857 1.651264,-0.661423 2.1,-0.025 0.256425,1.032419 0.09103,2.128439 0.075,3.175 2.500105,-1.145561 4.86079,-2.539296 7.425,-3.6 0.881448,-0.41014 1.879501,0.458008 1.575,1.25 -0.256421,0.650567 -1.057027,0.885574 -1.65,1.225 -2.131501,1.018276 -4.227474,2.120867 -6.375,3.125 0.400658,0.579852 0.936527,1.088577 1.225,1.725 0.48079,0.919277 -0.950606,1.712424 -1.8,1.175 -0.705158,-0.452568 -1.148052,-1.145148 -1.725,-1.725 -0.817342,0.395997 -1.632658,0.804003 -2.45,1.2 -0.14424,2.064837 -0.05,4.146019 -0.05,6.225 2.836657,-1.230416 5.420395,-2.852153 8.225,-4.125 0.48079,-0.197997 1.103185,-0.461139 1.6,-0.15 1.025684,0.311141 1.500632,1.276436 1.725,2.125 0.14424,2.842688 0.0019,5.671454 0.05,8.5 2.163552,-1.046561 4.284527,-2.143581 6.4,-3.275 0,-0.876849 0.01603,-1.759008 0,-2.65 -1.218001,-0.692993 -2.530079,-1.250436 -3.7,-2 -0.496815,-0.565709 -0.306447,-1.616145 0.575,-1.8 1.201974,-0.02829 2.099316,0.786575 3.125,1.225 0.03206,-2.262837 -0.05513,-4.537163 0.025,-6.8 -0.08013,-0.509137 0.116001,-1.155287 0.725,-1.325 0.737211,-0.296997 1.63397,0.207007 1.65,0.9 0.09616,2.404264 -0.007,4.820736 0.025,7.225 0.865421,-0.410139 1.679448,-0.917146 2.625,-1.2 1.08979,-0.424282 2.019263,0.957007 1.25,1.65 -1.057737,0.806135 -2.453159,1.214579 -3.575,1.95 -0.609001,0.339427 -0.07755,1.15829 -0.35,1.625 1.778921,-0.862707 3.521079,-1.801437 5.3,-2.65 0.03205,-1.414274 -0.05834,-2.849869 0.15,-4.25 0.304501,-0.905131 2.000632,-0.844277 2.225,0.075 0.11219,0.975848 0.06795,1.963295 0.1,2.925 1.762894,-0.862707 3.439026,-1.879722 5.25,-2.7 0.576948,-0.197995 1.316,-0.628568 1.925,-0.275 1.169921,0.381854 1.243631,1.920148 0.25,2.5 -2.019316,1.145561 -4.26979,1.994583 -6.225,3.225 0.961579,0.480853 2.068552,0.731005 2.95,1.325 0.608999,0.551567 0.174394,1.611858 -0.675,1.725 -1.378264,-0.099 -2.574947,-0.808289 -3.825,-1.275 -0.464762,-0.141427 -0.987158,-0.540427 -1.5,-0.3 -1.602631,0.707137 -3.054422,1.611292 -4.625,2.375 0.544894,0.325282 1.119842,0.768712 1.825,0.5 1.250052,-0.381853 2.324947,-1.093146 3.575,-1.475 1.025685,-0.395996 1.941053,0.800436 1.3,1.55 -0.673105,0.721279 -1.818553,0.947432 -2.7,1.4 2.387921,1.470844 5.112078,2.454156 7.5,3.925 0.961578,0.749565 -0.157001,2.340709 -1.375,1.775 -2.403947,-1.060705 -4.678106,-2.393582 -7.05,-3.525 -0.01603,1.018276 0.01219,2.056724 -0.1,3.075 -0.112183,0.438425 -0.56921,0.776 -1.05,0.875 -0.641052,0.08486 -1.23397,-0.423434 -1.25,-0.975 -0.08013,-1.40013 -0.025,-2.810728 -0.025,-4.225 -0.993631,-0.537424 -1.98521,-1.114861 -3.075,-1.525 -0.480789,-0.01414 -0.883315,0.291144 -1.3,0.475 -1.570578,0.876849 -3.330711,1.507724 -4.725,2.625 2.516131,1.428415 5.047975,2.861728 7.5,4.375 0.689133,0.466711 1.444237,1.076436 1.3,1.925 -0.288474,0.905134 -1.218553,1.425719 -2.1,1.85 -2.371895,1.117276 -4.769132,2.193583 -7.125,3.325 1.95521,1.074848 3.994791,2.01101 5.95,3.1 0.368605,0.155571 0.81729,0.444714 1.25,0.275 0.737211,-0.31114 1.428817,-0.721432 2.15,-1.075 0.04808,-1.499129 -0.09745,-3.004156 0.175,-4.475 0.480789,-0.593994 1.893579,-0.541993 2.15,0.25 0.160259,0.961707 0.12692,1.949152 0.175,2.925 2.371895,-1.272845 4.730027,-2.551153 7.15,-3.725 0.625027,-0.395996 1.686526,-0.360421 1.975,0.375 0.400657,0.749565 -0.358948,1.288861 -1,1.6 -2.179579,1.173848 -4.436447,2.272868 -6.6,3.475 0.673105,0.452567 1.441,0.837577 2.05,1.375 0.657079,0.72128 -0.283289,1.970996 -1.325,1.575 -1.089789,-0.339426 -1.926237,-1.193145 -3,-1.575 -0.657078,-0.04243 -1.203185,0.374718 -1.7,0.7 1.714815,0.93342 3.471079,1.801437 5.25,2.65 1.378262,-0.579852 2.673658,-1.297433 4.1,-1.75 1.025684,-0.424281 1.982079,0.82872 1.325,1.55 -0.737211,0.777849 -1.945474,0.990861 -2.875,1.5 1.891106,1.004133 3.865948,1.925152 5.725,3 1.34621,0.905135 0.03661,3.053851 -1.55,2.375 -2.131499,-0.806136 -4.014659,-2.038295 -6.05,-3 -0.01603,1.145561 0.05129,2.293583 -0.125,3.425 -0.304499,0.905131 -2.000632,0.844277 -2.225,-0.075 -0.19232,-1.513272 -0.0359,-3.047585 -0.1,-4.575 -1.875079,-0.876849 -3.683895,-1.923149 -5.575,-2.8 l 0,2 c 1.169921,0.509137 2.417263,0.932007 3.475,1.625 0.785289,0.608137 0.14171,1.941427 -0.9,1.8 -0.897474,-0.240425 -1.725606,-0.646431 -2.575,-1 -0.04808,2.27698 0.05513,4.523021 -0.025,6.8 0.08013,0.509138 -0.116,1.180288 -0.725,1.35 -0.737211,0.296999 -1.63397,-0.232007 -1.65,-0.925 -0.09616,-2.390121 0.01603,-4.784879 0,-7.175 -0.929526,0.339425 -1.783289,0.95328 -2.825,0.925 -1.009658,-0.212141 -1.124395,-1.536575 -0.275,-1.975 0.993631,-0.509139 2.074316,-0.922432 3.1,-1.375 0,-1.117275 -0.01795,-2.232724 -0.05,-3.35 -2.25971,-1.060705 -4.447343,-2.232724 -6.675,-3.35 -0.08013,2.941687 0.06218,5.883313 -0.05,8.825 0.160263,0.93342 -0.645474,1.692146 -1.575,1.975 -0.881447,0.05657 -1.66279,-0.371432 -2.4,-0.725 -2.323815,-1.159704 -4.608238,-2.337011 -6.9,-3.525 -0.09615,1.880983 0.01603,3.779874 0,5.675 0.849394,0.410139 1.563422,1.102003 2.525,1.3 1.185947,-0.509137 2.183922,-1.343147 3.45,-1.725 1.057737,-0.31114 2.007079,0.872149 1.35,1.65 -0.705159,0.664708 -1.709579,0.997433 -2.575,1.45 2.419973,1.499129 5.044132,2.7193 7.4,4.275 0.641053,0.466711 0.378236,1.484573 -0.375,1.725 -0.609,0.268712 -1.196132,-0.212859 -1.725,-0.425 -2.115473,-1.173847 -4.225553,-2.358726 -6.325,-3.575 -0.144237,0.791992 0.2385,1.880005 -0.675,2.375 -0.673105,0.410139 -1.612816,-0.07443 -1.725,-0.725 -0.208347,-1.018277 -0.05897,-2.042581 -0.075,-3.075 -0.416684,-0.197997 -0.799342,-0.412859 -1.2,-0.625 -0.03206,1.965839 -0.18013,3.945018 -0.1,5.925 -0.01603,0.254569 0.257683,0.408573 0.45,0.55 0.961578,0.579852 2.043552,1.010292 2.925,1.675 0.657079,0.494995 0.349395,1.580288 -0.5,1.75 -1.105815,0.099 -1.975606,-0.590862 -2.825,-1.1 -0.01603,1.781984 0.117316,3.557159 -0.075,5.325 -0.09616,0.636423 -0.81809,1.047157 -1.525,1.075 z m -9.875,-23.775 c 2.195605,-1.046562 4.304395,-2.278437 6.5,-3.325 0.01602,-0.961705 0.05513,-1.927438 -0.025,-2.875 -0.753237,-0.707137 -1.802526,-1.10172 -2.7,-1.625 -1.282105,0.565709 -2.542895,1.156006 -3.825,1.75 0,2.022411 -0.04616,4.052591 0.05,6.075 z m 18.35,-0.375 c 0.01603,-1.994125 0.03205,-3.980875 0,-5.975 -0.86542,-0.410139 -1.675606,-0.861575 -2.525,-1.3 -0.3045,-0.141427 -0.695499,-0.376284 -1,-0.15 -0.753236,0.466711 -1.462789,0.98329 -2.2,1.45 -0.01603,1.032419 -0.025,2.067581 -0.025,3.1 1.923158,0.947563 3.762738,2.026436 5.75,2.875 z m -22.9,-10.7 c 1.378263,-0.820277 2.978789,-1.337293 4.325,-2.2 0.416684,-0.608137 0.638447,-1.349434 0.975,-2 -1.378264,-0.721279 -2.812764,-1.400436 -4.175,-2.15 -1.859053,1.187989 -3.639028,2.444583 -5.45,3.675 1.506473,0.806135 2.882632,1.784008 4.325,2.675 z m 25.45,-0.15 c 2.243684,-0.862705 4.297342,-2.105723 6.525,-3.025 -1.634684,-1.046561 -3.351211,-2.024151 -5.05,-3 -1.426343,0.721279 -2.857632,1.442864 -4.3,2.15 0.176289,0.905135 0.159605,1.834009 0.4,2.725 0.673105,0.523283 1.5115,1.093431 2.425,1.15 z m -16.525,-8.175 c 0.08739,-0.0091 0.169869,-0.04697 0.25,-0.1 0.801317,-0.480853 1.564711,-1.005005 2.35,-1.5 0.01603,-1.230417 0.01603,-2.480441 0,-3.725 -2.371894,-1.159704 -4.596053,-2.546868 -7,-3.65 -0.04808,2.27698 -0.04103,4.558878 -0.025,6.85 1.234026,0.608138 2.431999,1.263577 3.65,1.9 0.228374,0.106076 0.51282,0.252183 0.775,0.225 z m 9.65,-0.725 c 1.730841,-0.650565 3.219158,-1.746149 4.95,-2.425 0.03206,-2.107267 0.142315,-4.242733 -0.05,-6.35 -2.275737,1.117275 -4.51529,2.329439 -6.775,3.475 -0.04808,1.400131 -0.08397,2.789012 -0.1,4.175 0.657079,0.339425 1.18971,1.026 1.975,1.125 z" id="path4" inkscape:connector-curvature="0"/>
                        </svg>
                      </div>
                    <?php endif; ?>
                  </div>
                  <div class="anchor"></div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>

</div>









