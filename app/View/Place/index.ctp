<!-- File: /app/View/Posts/index.ctp -->
<style>
table { table-layout: fixed; }
table th, table td { overflow: hidden; }
</style>
<h1>Singapore 2013 Itinerary</h1>
<table class="table table-striped">
    <thead>
        <tr>
            <th style="width: 30%">Day</th>
            <th>
                <div class="right">
                 <?php echo $this->Html->link(
                    'Add new item',
                    array('controller' => 'place', 'action' => 'add')
                    ); ?>
                </div>
                Plans 
            </th>
        </tr>
    </thead>
    <tbody class="table-body">
        <tr>
            <td>11th Nov - Monday
            </td>
            <td>

                <ul>
                    <?php foreach($day1 as $d1):?>
                    <li>
                        <?php 
                        echo $d1['Place']['body'];
                        ?>
                    </li>
                <?php endforeach;?>
            </ul>

        </td>
    </tr>

    <tr>
        <td>12th Nov - Tuesday </td>
        <td>

            <ul>
                <?php foreach($day2 as $d2):?>
                <li>
                    <?php 
                    echo $d2['Place']['body'];
                    ?>
                </li>
            <?php endforeach;?>
        </ul>

    </td>
</tr>

<tr>
    <td>13th Nov - Wednesday</td>
    <td>

        <ul>
            <?php foreach($day3 as $d3):?>
            <li>
                <?php 
                echo $d3['Place']['body'];
                ?>
            </li>
        <?php endforeach;?>
    </ul>

</td>
</tr>

<tr>
    <td>14th Nov - Thursday</td>
    <td>

        <ul>
            <?php foreach($day4 as $d4):?>
            <li>
                <?php 
                echo $d4['Place']['body'];
                ?>
            </li>
        <?php endforeach;?>
    </ul>
    
</td>
</tr>

<tr>
    <td>15th Nov - Friday</td>
    <td>

        <ul>
            <?php foreach($day5 as $d5):?>
            <li>
                <?php 
                echo $d5['Place']['body'];
                ?>
            </li>
        <?php endforeach;?>
    </ul>

</td>
</tr>

<tr>
    <td>16th Nov - Saturday</td>
    <td>

        <ul>
            <?php foreach($day6 as $d6):?>
            <li>
               <?php 
               echo $d6['Place']['body'];
               ?>
           </li>
       <?php endforeach;?>
   </ul>

</td>
</tr>

<tr>
    <td>17th Nov - Sunday</td>
    <td>

        <ul>
         <?php foreach($day7 as $d7):?>
         <li>
            <?php 
            echo $d7['Place']['body'];
            ?>
        </li>
    <?php endforeach;?>
</ul>

</td>
</tr>

<tr>
    <td>18th Nov - Monday </td>
    <td>

        <ul>
            <?php foreach($day8 as $d8):?>
            <li>
              <?php 
              echo $d8['Place']['body'];
              ?>
          </li>
      <?php endforeach;?>
  </ul>
  
</td>
</tr>

<tr>
    <td>19th Nov - Tuesday</td>
    <td>

        <ul>
            <?php foreach($day9 as $d9):?>
            <li>
                <?php 
                echo $d9['Place']['body'];
                ?>
            </li>
        <?php endforeach;?>
    </ul>
    
</td>
</tr>

<tr>
    <td>20th Nov - Wednesday</td>
    <td>

        <ul>
            <?php foreach($day10 as $d10):?>
            <li>
                <?php 
                echo $d10['Place']['body'];
                ?>
            </li>
        <?php endforeach;?>
    </ul>
    
</td>
</tr>

<tr>
    <td>21st Nov - Thursday</td>
    <td>

        <ul>
            <?php foreach($day11 as $d11):?>
            <li>
             <?php 
             echo $d11['Place']['body'];
             ?>
         </li>
     <?php endforeach;?>
 </ul>

</td>
</tr>

<tr>
    <td>22nd Nov - Friday</td>
    <td>

        <ul>
            <?php foreach($day12 as $d12):?>
            <li>
                <?php 
                echo $d12['Place']['body'];
                ?>
            </li>
        <?php endforeach;?>
    </ul>
    
</td>
</tr>

<tr>
    <td>23rd Nov - Saturday</td>
    <td>

        <ul>
            <?php foreach($day13 as $d13):?>
            <li>
              <?php 
              echo $d13['Place']['body'];
              ?>
          </li>
      <?php endforeach;?>
  </ul>
  
</td>
</tr>


</tbody>
</table>

