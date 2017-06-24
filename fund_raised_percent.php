<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

$raised_percent = WPNEOCF()->getFundRaisedPercentFormat();
?>
<div class="campaign_goal">
    
   <span class="before_raise"> <?php echo wpneo_crowdfunding_price(wpneo_crowdfunding_get_total_fund_raised_by_campaign()); ?> </span><br>
    Raised of
   <span class="after_raise"><?php echo wpneo_crowdfunding_price(wpneo_crowdfunding_get_total_goal_by_campaign(get_the_ID())); ?></span>
  goal
</div>
<div class="wpneo-raised-bar">
    <div id="neo-progressbar">
        <?php $css_width = WPNEOCF()->getFundRaisedPercent(); if( $css_width >= 100 ){ $css_width = 100; } ?>
        <div style="width: <?php echo $css_width; ?>%"></div>
    </div>
    <div class="days_campaigns">
<?php if ($wpneo_campaign_end_method != 'never_end'){
            ?>
            
             <span class="days_campaigns_date"> <?php echo WPNEOCF()->dateRemaining(); ?></span>
                Days to go
        <?php } ?>
        </div>
</div>