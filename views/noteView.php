<?php ob_start(); ?>
<div class="row">
    <div class="col-md-12 col-lg-12 col-sm-12">
        <div class="white-box">
            <div class="d-md-flex mb-3">
                <h3 class="box-title mb-0">Recent sales</h3>
                <div class="col-md-3 col-sm-4 col-xs-6 ms-auto">
                    <select class="form-select shadow-none row border-top">
                        <option>March 2021</option>
                        <option>April 2021</option>
                        <option>May 2021</option>
                        <option>June 2021</option>
                        <option>July 2021</option>
                    </select>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table no-wrap">
                    <thead>
                        <tr>
                            <th class="border-top-0">#</th>
                            <th class="border-top-0">Matière</th>
                            <!--<th class="border-top-0">Status</th>-->
                            <th class="border-top-0">Date</th>
                            <th class="border-top-0">Notes</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td class="txt-oflo">Français</td>
                            
                            <td class="txt-oflo">April 18, 2021</td>
                            <td><span class="text-success">16/20</span></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td class="txt-oflo">Mathématique</td>
                            
                            <td class="txt-oflo">April 19, 2021</td>
                            <td><span class="text-success">17/20</span></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td class="txt-oflo">Histoire géo</td>
                           
                            <td class="txt-oflo">April 19, 2021</td>
                            <td><span class="text-danger">9/20</span></td>
                        </tr>
              
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>

<?php $content = ob_get_clean();
require('template4.php'); ?>