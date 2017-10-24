<?php

/* @var $this yii\web\View */

$this->title = 'Dashboards - MySleep';
?>

<div class="col-md-6">
    <!-- AREA CHART -->
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Pie Chart</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <div class="chart">

        <?php
         echo  \dosamigos\chartjs\ChartJs::widget([
        'type' => 'pie',

        'data' =>[   

                    'labels' => ['Chrome', 'IE' ,'FireFox' , 'Safari', 'Opera','Navigator'],
                     
                    'datasets' => [
                          [           
                           'data'=>[700,500,400,600,300,100],
                           'backgroundColor'=>['#f56954','#00a65a','#f39c12','#00c0ef','#3c8dbc','#d2d6de'],
                          ],
                    
                    ]
               ]    

            ]);
        ?>
                
            </div>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
</div>


<div class="col-md-6">
    <!-- AREA CHART -->
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Radar Chart</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <div class="chart">
                    <?php
     echo  \dosamigos\chartjs\ChartJs::widget([
                    'type' => 'radar',

                    'data' =>[      
 'labels'=>['Yii','Laravel','CI','Symfony'],
  'datasets' => [
                [
                'label'=>'A',
                'backgroundColor' => "rgba(255,99,132,0.2)",
                'borderColor' => "rgba(255,99,132,1)",
                'pointBackgroundColor' => "rgba(255,99,132,1)",
                'pointBorderColor' => "#fff",
                'pointHoverBackgroundColor' => "#fff",
                'pointHoverBorderColor' => "rgba(255,99,132,1)",
                'data'=>[35,45,15,5]
                 ],  

                [
                'label'=>'B',
                'backgroundColor' => "rgba(12,68,255,0.2)",
                'borderColor' => "rgba(12,68,255,1)",
                'pointBackgroundColor' => "rgba(12,68,255,1)",
                'pointBorderColor' => "#fff",
                'pointHoverBackgroundColor' => "#fff",
                'pointHoverBorderColor' => "rgba(255,180,24,1)",
                'data'=>[45,35,5,15]
                 ], 
                ]
                 
           ]     ]);
                ?>
            </div>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
</div>

<div class="col-md-6">
    <!-- AREA CHART -->
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Bar Chart</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <div class="chart">
            <?php
         
 echo  \dosamigos\chartjs\ChartJs::widget([
'type' => 'bar',

'data' =>[   

            
             'labels' => ['Chrome', 'IE' ,'FireFox' , 'Safari', 'Opera','Navigator'],
            'datasets' => [
                  [   
                  'label' => ['Browsers'],

                  'borderColor' => "rgba(179,181,198,1)",      
                   'data'=>[700,500,400,600,300,100,0],
                   'backgroundColor'=>['#f56954','#00a20a','#f39c12','#00c0ef','#3c8dbc','#F2d6fe'],
                  ],
            
            ]
       ]    

    ]);
?>
            </div>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
</div>


<div class="col-md-6">
    <!-- AREA CHART -->
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Line Chart</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <div class="chart">
                <?php

                echo  \dosamigos\chartjs\ChartJs::widget([
                    'type' => 'line',
                    'data' => [
                        'labels' => ["January", "February", "March", "April", "May", "June", "July"],
                        'datasets' => [
                            [
                                'label' => "First Round",
                                'backgroundColor' => "rgba(179,181,198,0.2)",
                                'borderColor' => "rgba(179,181,198,1)",
                                'pointBackgroundColor' => "rgba(179,181,198,1)",
                                'pointBorderColor' => "#fff",
                                'pointHoverBackgroundColor' => "#fff",
                                'pointHoverBorderColor' => "rgba(179,181,198,1)",
                                'data' => [65, 59, 90, 81, 12, 55, 80]
                            ],
                            [
                                'label' => "Second Round",
                                'backgroundColor' => "rgba(255,99,132,0.2)",
                                'borderColor' => "rgba(255,99,132,1)",
                                'pointBackgroundColor' => "rgba(255,99,132,1)",
                                'pointBorderColor' => "#fff",
                                'pointHoverBackgroundColor' => "#fff",
                                'pointHoverBorderColor' => "rgba(255,99,132,1)",
                                'data' => [28, 48, 40, 19, 96, 27, 100]
                            ]
                        ]
                    ]
                ]);
                ?>
            </div>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
</div>


<div class="col-md-6">
    <!-- AREA CHART -->
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Doughnut Chart</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <div class="chart">

   <?php
         echo  \dosamigos\chartjs\ChartJs::widget([
        'type' => 'doughnut',

        'data' =>[   

                    'labels' => ['Chrome', 'IE' ,'FireFox' , 'Safari', 'Opera','Navigator'],
                     
                    'datasets' => [
                          [           
                           'data'=>[700,500,400,600,300,100],
                           'backgroundColor'=>['#f56954','#00a65a','#f39c12','#00c0ef','#3c8dbc','#d2d6de'],
                          ],
                    
                    ]
               ]    

            ]);
        ?>



            </div>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
</div>








