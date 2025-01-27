<?php echo '<?xml version="1.0" encoding="UTF-8"?>' ?>
<?php
    $corporate_builder_number = get_option('corporate_builder_number');
    $corp_state = get_option('corporate_builder_state');
    $corp_name = get_option('corporate_name');
    $builder_number = get_option('builder_number');
    $brand_name = get_option('corporate_name');

//    $logo = get_theme_mod('custom_log');
//    $image = wp_get_attachment_image_src($logo, 'full');
//    $logo_url = $image[0];

//    if(function_exists('the_custom_logo')) :
//        $brand_logo = $logo_url;
//    endif;

    $reporting_name = get_field('reporting_name', 'option');
    $leads_email = get_field('default_leads_email', 'option');
    $builder_website = get_site_url();
?>

<Builders>
    <Corporation>
        <CorporateBuilderNumber>
            <![CDATA[<?php echo $corporate_builder_number; ?>]]>
        </CorporateBuilderNumber>
        <CorporateState>
            <![CDATA[<?php echo $corp_state; ?>]]>
        </CorporateState>
        <CorporateName>
            <![CDATA[<?php echo $corp_name; ?>]]>
        </CorporateName>

<Builder>
    <BuilderNumber>
        <![CDATA[<?php echo $builder_number; ?>]]>
    </BuilderNumber>

    <BrandName>
        <![CDATA[<?php echo $brand_name; ?>]]>
    </BrandName>

<!--    <BrandLogo_Med>-->
<!--        <![CDATA[--><?php //echo $brand_logo; ?><!--]]>-->
<!--    </BrandLogo_Med>-->

    <ReportingName>
        <![CDATA[<?php echo $reporting_name; ?>]]>
    </ReportingName>

    <BuilderWebsite>
        <![CDATA[<?php echo $builder_website; ?>]]>
    </BuilderWebsite>

    <?php
        $args = array(
            'post_type' => 'communities',
            'posts_per_page' => -1,
            'post_status' => 'publish',
            'orderby' => 'title',
            'order' => 'ASC',
            'meta_query'   => array(
                array(
                    'key' => 'communty_listing_status',
                    'value' => '1',
                    'compare' => '==' // not really needed, this is the default
                )
            )
        );
        $community_query = new WP_Query($args);
    ?>
    <?php if ($community_query->have_posts()) : ?>
        <?php while ($community_query->have_posts()) : $community_query->the_post(); ?>
            <?php

                $community_id = get_the_ID();
                $community_type = get_field('community_type');
                $community_status = get_field('status');
				if (!empty($community_status)) {
					$community_status = $community_status;
				}
                $leads_email = get_field('leads_email');

                $out_of_Subdivision = get_field('Out_of_Subdivision');

                $out_of_community_sales_office = get_field('out_of_community_sales_office');

                $out_of_community_address = $out_of_community_sales_office['out_of_community_address'] ?? null;
                $out_of_community_city = $out_of_community_sales_office['out_of_community_city'] ?? null;
                $out_of_community_county = $out_of_community_sales_office['out_of_community_county'] ?? null;
                $out_of_community_state = $out_of_community_sales_office['out_of_community_state'] ?? null;
                $out_of_community_postal_code = $out_of_community_sales_office['out_of_community_postal_code'] ?? null;
                $out_of_community_phone_number = $out_of_community_sales_office['phone_number'] ?? null;

                $comm_sales_agent_group = get_field('comm_sales_agent_group');
                $saleAgent = $comm_sales_agent_group['subdivision_sales_agent'] ?? null;

                $comm_description_group  = get_field('comm_description_group');
                $subdivision_street1 = get_field('comm_address');
                $subdivision_city = get_field('comm_city');
                $subdivision_state = get_field('comm_state');
                $subdivision_zip = get_field('comm_postal_code');

                $latitude_longitude_group = get_field('latitude_longitude');
                $longitude = $latitude_longitude_group['longitude'] ?? null;
                $latitude = $latitude_longitude_group['latitude'] ?? null;

                $comm_directions_group = get_field('comm_directions_group');
                $Comm_directions_text = $comm_directions_group['Comm_directions_text'];

                $sub_amenity = get_field('sub_amenity');
                $open_amenties = get_field('open_amenties');

                $sub_website = get_field('sub_website');
                $community_logo = get_field('community_logo');

                $gallery = get_field('gallery');
            ?>

           <Subdivision Status="<?php echo $community_status['value']; ?>">
                <SubdivisionNumber>
                    <![CDATA[<?php echo $community_id ?>]]>
                </SubdivisionNumber>

                <SubdivisionName>
                    <![CDATA[<?php echo the_title(); ?>]]>
                </SubdivisionName>

                <?php if($community_type) : ?>
                    <CommunityStyle>
                        <![CDATA[<?php echo $community_type['value']; ?>]]>
                    </CommunityStyle>
                <?php endif; ?>

                <?php if($out_of_Subdivision == 'Yes') : ?>
                    <SalesOffice>
                        <?php if( $saleAgent ): ?>
                            <?php foreach( $saleAgent as $agent ):
                                $permalink = get_permalink( $agent->ID );
                                $title = get_the_title( $agent->ID );
                                $custom_field = get_field( 'field_name', $agent->ID );
                                ?>
                                <Agent><![CDATA[<?php echo $title; ?>]]></Agent>
                            <?php endforeach; ?>
                        <?php endif; ?>

                        <Address OutOfCommunity="1">
                            <Street1>
                                <![CDATA[<?php echo $out_of_community_address; ?>]]>
                            </Street1>
                            <Street2>
                                <![CDATA[]]>
                            </Street2>
                            <City>
                                <![CDATA[<?php echo $out_of_community_city; ?>]]>
                            </City>
                            <State>
                                <![CDATA[<?php echo $out_of_community_state; ?>]]>
                            </State>
                            <ZIP>
                                <![CDATA[<?php echo $out_of_community_postal_code; ?>]]>
                            </ZIP>
                            <Geocode>
                                <?php if( have_rows('out_of_community_sales_office') ): ?>
                                    <?php while( have_rows('out_of_community_sales_office') ): the_row();
                                        // Get sub field values.
                                        $lat_lng_out_community_group = get_sub_field('lat_lng_out_community');
                                        $latitude_out_of_community_sf = $lat_lng_out_community_group['latitude_out_of_community_sf'] ?? null;
                                        $longitude_out_of_community_sf = $lat_lng_out_community_group['longitude_out_of_community_sf'] ?? null;
                                    ?>

                                        <Latitude><![CDATA[<?php echo $latitude_out_of_community_sf; ?>]]></Latitude>
                                        <Longitude><![CDATA[<?php echo $longitude_out_of_community_sf; ?>]]></Longitude>

                                    <?php endwhile; ?>
                                <?php endif; ?>

                            </Geocode>
                        </Address>

                        <?php
                            $out_of_community_sales_office = get_field('out_of_community_sales_office');

                            $out_of_community_phone_number = $out_of_community_sales_office['phone_number'] ?? null;

                            if(isset($out_of_community_phone_number) ) {
                                $out_of_Subdivision_phone  = $out_of_community_phone_number;
                                $subsplit_phone = isset($out_of_Subdivision_phone);
                                if (!empty($subsplit_phone)) $subPhoneSplit = strpos(',',$subsplit_phone);
                                if ($subPhoneSplit > 0) $subsplit_phone = substr($subsplit_phone,0,$subPhoneSplit);
                            }
                        ?>
                        <Phone>
                            <AreaCode><![CDATA[<?php echo substr(preg_replace("/[^0-9]/","",$subsplit_phone),0,3); ?>]]></AreaCode>
                            <Prefix><![CDATA[<?php echo substr(preg_replace("/[^0-9]/","",$subsplit_phone),3,3); ?>]]></Prefix>
                            <Suffix><![CDATA[<?php echo substr(preg_replace("/[^0-9]/","",$subsplit_phone),-4); ?>]]></Suffix>
                        </Phone>
                    </SalesOffice>
                <?php else: ?>

                    <SalesOffice>
                        <?php if( $saleAgent ): ?>
                            <?php foreach( $saleAgent as $agent ):
                                $permalink = get_permalink( $agent->ID );
                                $title = get_the_title( $agent->ID );
                                $custom_field = get_field( 'field_name', $agent->ID );
                                ?>
                                <Agent><![CDATA[<?php echo $title; ?>]]></Agent>
                            <?php endforeach; ?>
                        <?php endif; ?>

                        <Address OutOfCommunity="0">
                            <Street1>
                                <![CDATA[<?php echo $subdivision_street1; ?>]]>
                            </Street1>

                            <City>
                                <![CDATA[<?php echo $subdivision_city; ?>]]>
                            </City>
                            <State>
                                <![CDATA[<?php echo $subdivision_state; ?>]]>
                            </State>
                            <ZIP>
                                <![CDATA[<?php echo $subdivision_zip; ?>]]>
                            </ZIP>
                            <Geocode>
                                <?php
                                    $latitude_longitude_group = get_field('latitude_longitude');
                                    $longitude = $latitude_longitude_group['longitude'] ?? null;
                                    $latitude = $latitude_longitude_group['latitude'] ?? null;
                                ?>
                                <Latitude><![CDATA[<?php echo $latitude; ?>]]></Latitude>
                                <Longitude><![CDATA[<?php echo $longitude; ?>]]></Longitude>
                            </Geocode>
                        </Address>

                        <?php
                            $subsplit_phone = get_field('comm_phone_number');
                            if($subsplit_phone) {
                                if (!empty($subsplit_phone)) $subPhoneSplit = strpos(',',$subsplit_phone);
                                if ($subPhoneSplit > 0) $subsplit_phone = substr($subsplit_phone,0,$subPhoneSplit);
                            }
                        ?>
                        <Phone>
                            <AreaCode><![CDATA[<?php echo substr(preg_replace("/[^0-9]/","",$subsplit_phone),0,3); ?>]]></AreaCode>
                            <Prefix><![CDATA[<?php echo substr(preg_replace("/[^0-9]/","",$subsplit_phone),3,3); ?>]]></Prefix>
                            <Suffix><![CDATA[<?php echo substr(preg_replace("/[^0-9]/","",$subsplit_phone),-4); ?>]]></Suffix>
                        </Phone>
                    </SalesOffice>
                <?php endif; ?>

                <SubAddress>
                    <SubStreet1><![CDATA[<?php echo $subdivision_street1; ?>]]></SubStreet1>
                    <SubCity><![CDATA[<?php echo $subdivision_city; ?>]]></SubCity>
                    <SubState><![CDATA[<?php echo $subdivision_state; ?>]]></SubState>
                    <SubZIP><![CDATA[<?php echo $subdivision_zip; ?>]]></SubZIP>
                    <SubGeocode>
                        <SubLatitude><![CDATA[<?php echo $latitude; ?>]]></SubLatitude>
                        <SubLongitude><![CDATA[<?php echo $longitude; ?>]]></SubLongitude>
                    </SubGeocode>
                </SubAddress>

                <DrivingDirections><![CDATA[<?php echo $Comm_directions_text; ?>]]></DrivingDirections>
                <?php
                $school_comm_group = get_field('school_comm_group');
                $school_district = $school_comm_group['school_district'];
                $elementary_school = $school_comm_group['elementary_school'];
                $middle_school = $school_comm_group['middle_school'];
                $high_school = $school_comm_group['high_school'];
                $sub_description = get_field('sub_description');
                $subdivision_video = get_field('subdivision_video');
                $promo_type = get_field('promo_type');
                $promo_headline = get_field('promo_headline');
                $promo_description = get_field('promo_description');
                $start_date = get_field('start_date');
                // Create DateTime object from value (formats must match).
                $formattedStartDate = DateTime::createFromFormat('Ymd', $start_date);

                $end_date = get_field('end_date');
                $formattedEndDate = DateTime::createFromFormat('Ymd', $end_date);

                $subdivision_mls_identifier = get_field('mls_identifier');
                ?>
                <Schools>
                    <DistrictName><![CDATA[<?php echo $school_district; ?>]]></DistrictName>
                    <Elementary><![CDATA[<?php echo $elementary_school; ?>]]></Elementary>
                    <Middle><![CDATA[<?php echo $middle_school; ?>]]></Middle>
                    <High><![CDATA[<?php echo $high_school; ?>]]></High>
                </Schools>

				<?php if($sub_amenity) : ?>
                    <?php foreach ($sub_amenity as $single_amenity) : ?>
                        <SubAmenity Type="<?php echo $single_amenity['value']; ?>"><![CDATA[1]]></SubAmenity>
                    <?php endforeach; ?>
                <?php endif; ?>

                  <SubDescription><![CDATA[<?php echo $sub_description; ?>]]></SubDescription>

                <?php
                $count = 1;
                if($gallery) : ?>
                    <?php foreach ($gallery as $single_gallery) : ?>
                        <SubImage Type="Standard" SequencePosition="<?php echo $count++; ?>" Caption="<?php echo $single_gallery['alt']; ?>"><![CDATA[<?php echo $single_gallery['url']; ?>]]></SubImage>
                    <?php endforeach; $count++; ?>
                <?php endif; ?>

				<?php if($subdivision_video) : ?>
                <SubVideoFile Title="Video Name"><![CDATA[<?php echo $subdivision_video; ?>]]></SubVideoFile>
				<?php endif; ?>
                <SubWebsite><![CDATA[<?php echo $sub_website; ?>]]></SubWebsite>
                <Promotion>
                    
                    <PromoHeadline><![CDATA[<?php echo $promo_headline; ?>]]></PromoHeadline>
                    <PromoDescription><![CDATA[<?php echo $promo_description; ?>]]></PromoDescription>
                    <StartDate><![CDATA[<?php echo $start_date; ?>]]></StartDate>
                    <EndDate><![CDATA[<?php echo $end_date; ?>]]></EndDate>
                </Promotion>

                    <?php
                $open_amenity_counter = 1;
                if($sub_amenity) : ?>
                    <?php foreach ($open_amenties as $single_open_amenity) : ?>
                        <OpenAmenity Type="LocalAreaAmenities" SequencePosition="<?php echo $open_amenity_counter++; ?>"><![CDATA[<?php echo $single_open_amenity['value']; ?>]]></OpenAmenity>
                    <?php endforeach; $open_amenity_counter++; ?>
                <?php endif; ?>

                <ListingConnections>
                    <MlsIdentifier><![CDATA[<?php echo $subdivision_mls_identifier ?>]]></MlsIdentifier>
                    <?php if( have_rows('mls_listing_ids') ): ?>
                        <?php while( have_rows('mls_listing_ids') ): the_row();
                            $listing_id = get_sub_field('listing_id');
                            ?>
                            <ListingId><![CDATA[<?php echo $listing_id; ?>]]></ListingId>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </ListingConnections>

                <?php
                    $args = array(
                        'post_type' => 'plans',
                        'posts_per_page' => -1,
                        'post_status' => 'publish',
                        'orderby' => 'title',
                        'order' => 'ASC',
                        'meta_query' => array(
                            'relation'		=> 'AND',
                            array(
                                'key' => 'plan_communities',
                                'value' => '"' . get_the_id() . '"',
                                'compare' => 'LIKE'
                            ),
                            array(
                                'key' => 'generic_plan',
                                'value' => '0',
                                'compare' => '==' // not really needed, this is the default
                            ),

                            array(
                                'key' => 'plan_listing_status',
                                'value' => '1',
                                'compare' => '==' // not really needed, this is the default
                            )
                        )
                    );
                    $floorplans_query = new WP_Query($args);
                ?>
                <?php if ($floorplans_query->have_posts()) : ?>
                    <?php while ($floorplans_query->have_posts()) : $floorplans_query->the_post(); ?>
                        <?php
                            $primary_plan_type = get_field('primary_plan_type');
                            $plan_name = get_field('plan_name');
                            $plan_Number = get_the_ID();
                            $plan_base_sqft = get_field('plan_base_sqft');
                            $plan_base_price = get_field('plan_base_price');

                            $plan_beds_group = get_field('plan_beds_group');
                            $Plan_beds = $plan_beds_group['Plan_beds'];

                            $plan_baths_group = get_field('plan_baths_group');
                            $plan_full_baths = $plan_baths_group['plan_full_baths'];

                            $plan_half_baths_group = get_field('plan_half_baths_group');
                            $plan_half_baths = $plan_half_baths_group['plan_half_baths'];

                            $plan_stories = get_field('plan_stories');
                            $plan_garages = get_field('plan_garages');
                            $plan_amenity_type = get_field('plan_amenity_type');
                            $feed_plan_description = get_field('feed_plan_description');
                            $plan_elevation_options = get_field('plan_elevation_options');
                            $plan_photos = get_field('plan_photos');
                            $virtual_tour_url = get_field('virtual_tour_url');

                            $plan_video_url = get_field('plan_video_url');
                            $interactive_plan = get_field('interactive_plan');
                            $plan_website = get_field('plan_website');
                        ?>
                            <Plan Type="<?php echo $primary_plan_type['value']; ?>">
                                <PlanNumber><![CDATA[<?php echo $plan_Number; ?>]]></PlanNumber>
                                <PlanName><![CDATA[<?php echo $plan_name; ?>]]></PlanName>
                                <PlanTypeName><![CDATA[<?php echo $primary_plan_type['label']; ?>]]></PlanTypeName>
                                <BasePrice><![CDATA[<?php echo $plan_base_price; ?>]]></BasePrice>
                                <BaseSqft><![CDATA[<?php echo $plan_base_sqft; ?>]]></BaseSqft>
                                <Stories><![CDATA[<?php echo $plan_stories; ?>]]></Stories>
                                <Baths><![CDATA[<?php echo $plan_full_baths; ?>]]></Baths>
                                <HalfBaths><![CDATA[<?php echo $plan_half_baths; ?>]]></HalfBaths>
                                <Bedrooms><![CDATA[<?php echo $Plan_beds; ?>]]></Bedrooms>
                                <Garage><![CDATA[<?php echo $plan_garages; ?>]]></Garage>
                                <?php
                                $counter = 1;
                                if($plan_amenity_type) :?>
                                    <?php foreach ($plan_amenity_type as $plan_amenity) : ?>
                                        <PlanAmenity Type=”<?php echo $plan_amenity['value']; ?>”><![CDATA[<?php echo $counter++; ?>]]></PlanAmenity>
                                    <?php endforeach; $counter++; ?>
                                <?php endif; ?>

                                <Description><![CDATA[<?php echo $feed_plan_description; ?>]]></Description>

                                <PlanImages>
                                    <?php
                                    $count = 1;
                                    if($plan_elevation_options) : ?>
                                        <?php foreach ($plan_elevation_options as $single_elevation) : ?>
                                            <ElevationImage  SequencePosition="<?php echo $count++; ?>" Caption="<?php echo $single_elevation['alt']; ?>"><![CDATA[<?php echo $single_elevation['url']; ?>]]></ElevationImage>
                                        <?php endforeach; $count++; ?>
                                    <?php endif; ?>

                                    <?php
                                    $interior_counter = 1;
                                    if($plan_photos) : ?>
                                        <?php foreach ($plan_photos as $single_interior) : ?>
                                            <InteriorImage  SequencePosition="<?php echo $interior_counter++; ?>" Caption="<?php echo $single_interior['alt']; ?>"><![CDATA[<?php echo $single_interior['url']; ?>]]></InteriorImage>
                                        <?php endforeach; $count++; ?>
                                    <?php endif; ?>

                                    <VirtualTour><![CDATA[<?php echo $virtual_tour_url; ?>]]></VirtualTour>
                                    <PlanViewer><![CDATA[<?php echo $interactive_plan; ?>]]></PlanViewer>
                                </PlanImages>
                                <PlanVideoFile><![CDATA[<?php echo $plan_video_url; ?>]]></PlanVideoFile>
                                <PlanWebsite><![CDATA[<?php echo $plan_website; ?>]]></PlanWebsite>

                                <?php
                                    $plan_architecture_style = get_field('architecture_style');
                                    if(!empty($plan_architecture_style)) {
                                        $plan_architecture_style_data = $plan_architecture_style['value'] ?? null;
                                    }
                                    $exterior_type = get_field('exterior_type');
                                    $cooling_system = get_field('cooling_system');
                                    $plan_heating_fuel = get_field('heating_fuel');
                                    $heating_system = get_field('heating_system');
                                    $parking_type = get_field('parking_type');
                                    $attic = get_field('attic');
                                    $deck = get_field('deck');
                                ?>
                                <RichDetails>
                                    <ArchitectureStyle>
                                        <![CDATA[<?php echo $plan_architecture_style_data; ?>]]>
                                    </ArchitectureStyle>


                                    <?php if($attic) : ?>
                                        <Attic><![CDATA[<?php echo $attic; ?>]]></Attic>
                                    <?php endif; ?>

                                    <?php if($deck) : ?>
                                        <Deck><![CDATA[<?php echo $deck; ?>]]></Deck>
                                    <?php endif; ?>

                                    <?php if(isset($cooling_system) && !empty($cooling_system)) :?>
                                        <CoolingSystems>
                                            <?php foreach ($cooling_system as $cooling_system) : ?>
                                                <CoolingSystem><![CDATA[<?php echo $cooling_system['value']; ?>]]></CoolingSystem>
                                            <?php endforeach; ?>
                                        </CoolingSystems>
                                    <?php endif; ?>

                                    <?php if(isset($exterior_type) && !empty($exterior_type)) :?>
                                        <ExteriorTypes>
                                            <?php foreach ($exterior_type as $exterior) : ?>
                                                <ExteriorType><![CDATA[<?php echo $exterior['value']; ?>]]></ExteriorType>
                                            <?php endforeach; ?>
                                        </ExteriorTypes>
                                    <?php endif; ?>

                                    <?php if(isset($plan_heating_fuel) && !empty($plan_heating_fuel)) :?>
                                        <HeatingFuels>
                                            <?php foreach ($plan_heating_fuel as $heating) : ?>
                                                <HeatingFuel><![CDATA[<?php echo $heating['value']; ?>]]></HeatingFuel>
                                            <?php endforeach; ?>
                                        </HeatingFuels>
                                    <?php endif; ?>

                                    <?php if(isset($heating_system) && !empty($heating_system)) : ?>
                                        <HeatingSystems>
                                            <?php foreach ($heating_system as $single_heating_system) : ?>
                                                <HeatingSystem><![CDATA[<?php echo ($single_heating_system) ? '' . $single_heating_system['value'] : ''; ?>]]></HeatingSystem>
                                            <?php endforeach; ?>
                                        </HeatingSystems>
                                    <?php endif; ?>

                                    <?php if(isset($parking_type) && !empty($parking_type)) :?>
                                        <ParkingTypes>
                                            <?php foreach ($parking_type as $parking) : ?>
                                                <ParkingType><![CDATA[<?php echo ($parking) ? '' . $parking['value'] : ''; ?>]]></ParkingType>
                                            <?php endforeach; ?>
                                        </ParkingTypes>
                                    <?php endif; ?>
                                </RichDetails>

                                <?php
                                    $args = array(
                                        'post_type' => 'homes',
                                        'posts_per_page' => -1,
                                        'post_status' => array('publish', 'draft'),
                                        'orderby' => 'title',
                                        'order' => 'ASC',
                                        // 'relation' => 'AND',
                                        'meta_query' => array(
                                            array(
                                                'key' => 'home_floorplan',
                                                'value' => '"' . get_the_id() . '"',
                                                'compare' => 'LIKE'
                                            ),
                                        )
                                    );
                                    $qm_home_query = new WP_Query($args);
                                ?>

                                <?php if ($qm_home_query->have_posts()) : ?>
                                    <?php while ($qm_home_query->have_posts()) : $qm_home_query->the_post(); ?>
                                        <?php
                                            $spec_id = get_the_ID();
                                            $mls_number = get_field('mls_number');
                                            $parcel_number = get_field('parcel_number');
                                            $spec_lot = get_field('spec_lot');
                                            $home_address = get_field('home_address');
                                            $home_city = get_field('home_city');
                                            $home_state = get_field('home_state');
                                            $home_postal_code = get_field('home_postal_code');

                                            $home_geolocation_group = get_field('home_geolocation_group');
                                            $home_latitude = $home_geolocation_group['home_latitude'] ?? null;
                                            $home_longitude = $home_geolocation_group['home_longitude'] ?? null;
                                            $home_get_directions = get_field('home_get_directions');
                                            $spec_status = get_field('spec_status');



                                            $spec_move_date_group  = get_field('spec_move-in_date');
                                            $move_in_date = $spec_move_date_group['month'] ?? null;



                                            $home_price = get_field('home_price');
                                            $home_sqft = get_field('home_sqft');
                                            $home_stories = get_field('home_stories');
                                            $home_beds = get_field('home_beds');
                                            $master_bedroom_location = get_field('master_bedroom_location');
                                            $home_baths = get_field('home_baths');
                                            $home_half_baths = get_field('home_half_baths');
                                            $home_garages = get_field('home_garages');
                                            $year_built = get_field('year_built');

                                            $home_description_group = get_field('home_description');
                                            $home_description =  $home_description_group['home_description'];
                                        ?>
                                        <Spec>
                                            <SpecNumber><![CDATA[<?php echo $spec_id; ?>]]></SpecNumber>
                                            <ParcelNumber><![CDATA[<?php echo $parcel_number; ?>]]></ParcelNumber>
                                            <SpecMLSNumber><![CDATA[<?php echo $mls_number; ?>]]></SpecMLSNumber>

                                            <SpecAddress>
                                                <SpecLot><![CDATA[<?php echo $spec_lot; ?>]]></SpecLot>
                                                <SpecStreet1><![CDATA[<?php echo $home_address; ?>]]></SpecStreet1>
                                                <SpecCity><![CDATA[<?php echo $home_city; ?>]]></SpecCity>
                                                <SpecState><![CDATA[<?php echo $home_state; ?>]]></SpecState>
                                                <SpecZIP><![CDATA[<?php echo $home_postal_code; ?>]]></SpecZIP>
                                                <SpecGeocode>
                                                    <SpecLatitude><![CDATA[<?php echo $home_latitude; ?>]]></SpecLatitude>
                                                    <SpecLongitude><![CDATA[<?php echo $home_longitude; ?>]]></SpecLongitude>
                                                </SpecGeocode>
                                            </SpecAddress>
                                            <SpecStatus><![CDATA[<?php echo (!empty($spec_status['value'])) ? '' . $spec_status['value'] : ''; ?>]]></SpecStatus>
                                            <SpecMoveInDate>
                                                <Month><?php echo (!empty($move_in_date)) ? '' . $move_in_date : ''; ?></Month>
                                            </SpecMoveInDate>

                                            <SpecPrice><![CDATA[<?php echo $home_price; ?>]]></SpecPrice>
                                            <SpecSqft><![CDATA[<?php echo $home_sqft; ?>]]></SpecSqft>
                                            <SpecBaths><![CDATA[<?php echo $home_baths; ?>]]></SpecBaths>
                                            <SpecHalfBaths><![CDATA[<?php echo $home_half_baths; ?>]]></SpecHalfBaths>
                                            <SpecBedrooms><![CDATA[<?php echo $home_beds; ?>]]></SpecBedrooms>
                                            <SpecGarage><![CDATA[<?php echo $home_garages; ?>]]></SpecGarage>

                                            <?php if(isset($home_description) && !empty($home_description)) :  ?>
                                                <SpecDescription><?php echo $home_description; ?></SpecDescription>
                                            <?php endif; ?>

                                            <?php
                                                $home_open_houses_group = get_field('home_open_houses');
                                                $open_house_date = $home_open_houses_group['date'];
                                                $start_time = $home_open_houses_group['start_time'] ?? null;
                                                $end_time = $home_open_houses_group['end_time'] ?? null;
                                                $home_elevation_photos = get_field('elevation_photos');
                                                $home_floorplans = get_field('home_floorplans');
                                                $photos = get_field('photos');
                                                $home_virtual__tour = get_field('home_virtual__tour');
                                            ?>
                                            <OpenHouses>
                                                <OpenHouse>
                                                    <Date><![CDATA[<?php echo ($open_house_date) ? '' . $open_house_date : '';  ?>]]></Date>
                                                    <StartTime><![CDATA[<?php echo (!empty($start_time)) ? '' . $start_time : ''; ?>]]></StartTime>
                                                    <EndTime><![CDATA[<?php echo (!empty($end_time)) ? '' . $end_time : ''; ?>]]></EndTime>
                                                </OpenHouse>
                                            </OpenHouses>
                                            <SpecYearBuilt><![CDATA[<?php echo (!empty($year_built)) ? '' . $year_built : ''; ?>]]></SpecYearBuilt>
                                            <SpecImages>
                                                <?php
                                                    $elevation_counter = 0;
                                                    if(isset($home_elevation_photos) && !empty($home_elevation_photos)) : ?>
                                                        <?php foreach ($home_elevation_photos as $home_elevation) : ?>
                                                            <SpecElevationImage  SequencePosition="<?php echo $elevation_counter++; ?>" Caption="<?php echo $home_elevation['alt']; ?>"><![CDATA[<?php echo $home_elevation['url']; ?>]]></SpecElevationImage>
                                                        <?php endforeach; $elevation_counter++; ?>
                                                <?php endif; ?>

                                                <?php
                                                $floorplans_counter = 1;
                                                if($home_floorplans) : ?>
                                                    <?php foreach ($home_floorplans as $plan) : ?>
                                                        <SpecFloorPlanImage  SequencePosition="<?php echo $floorplans_counter++; ?>" Caption="<?php echo $plan['alt']; ?>"><![CDATA[<?php echo $plan['url']; ?>]]></SpecFloorPlanImage>
                                                    <?php endforeach; $floorplans_counter++; ?>
                                                <?php endif; ?>

                                                <?php
                                                $homes_counter = 1;
                                                if($home_floorplans) : ?>
                                                    <?php foreach ($home_floorplans as $plan) : ?>
                                                        <SpecFloorPlanImage  SequencePosition="<?php echo $homes_counter++; ?>" Caption="<?php echo $plan['alt']; ?>"><![CDATA[<?php echo $plan['url']; ?>]]></SpecFloorPlanImage>
                                                    <?php endforeach; $homes_counter++; ?>
                                                <?php endif; ?>

                                                <?php
                                                $images_counter = 1;
                                                if($photos) : ?>
                                                    <?php foreach ($photos as $image) : ?>
                                                        <SpecInteriorImage  SequencePosition="<?php echo $images_counter++; ?>" Caption="<?php echo $image['alt']; ?>"><![CDATA[<?php echo $image['url']; ?>]]></SpecInteriorImage>
                                                    <?php endforeach; $count++; ?>
                                                <?php endif; ?>

                                                <SpecVirtualTour><![CDATA[<?php echo $home_virtual__tour; ?>]]></SpecVirtualTour>
                                            </SpecImages>

                                            <?php
                                                $appliances = get_field('appliance');
                                                $home_architecture_style = get_field('architecture_style');
                                                $exterior_type = get_field('exterior_type');
                                                $roof_type = get_field('roof_type');
                                                $cooling_system = get_field('cooling_system');
                                                $heating_fuel = get_field('heating_fuel');
                                                $heating_system = get_field('heating_system');
                                                $attic = get_field('attic');
                                                $deck = get_field('deck');
                                                $parking_type = get_field('parking_type');
                                            ?>

                                            <RichDetails>
                                                <ArchitectureStyle>
                                                    <![CDATA[<?php echo (!empty($home_architecture_style)) ? '' . $home_architecture_style: ''; ?>]]>
                                                </ArchitectureStyle>

                                                <Attic><?php echo (!empty($attic)) ? '' . $attic : ''; ?></Attic>

                                                <Deck><?php echo (!empty($deck)) ? '' . $deck : ''; ?></Deck>

                                                <Appliances>
                                                    <?php if($appliances) :?>
                                                        <?php foreach ($appliances as $appliance) : ?>
                                                            <Appliance><?php echo (!empty($appliance)) ? '' . $appliance['value'] : ''; ?></Appliance>
                                                        <?php endforeach; ?>
                                                    <?php endif; ?>
                                                </Appliances>

                                                <CoolingSystems>
                                                    <?php if($cooling_system) :?>
                                                        <?php foreach ($cooling_system as $cooling_system) : ?>
                                                            <CoolingSystem><?php echo $cooling_system; ?></CoolingSystem>
                                                        <?php endforeach; ?>
                                                    <?php endif; ?>
                                                </CoolingSystems>

                                                <ExteriorTypes>
                                                    <?php if($exterior_type) :?>
                                                        <?php foreach ($exterior_type as $exterior) : ?>
                                                            <ExteriorType><![CDATA[<?php echo $exterior; ?>]]></ExteriorType>
                                                        <?php endforeach; ?>
                                                    <?php endif; ?>
                                                </ExteriorTypes>

                                                <HeatingFuels>
                                                    <?php if(isset($heating_fuel) && !empty($heating_fuel)) :?>
                                                         <?php foreach ($heating_fuel as $fuel) : ?>
                                                            <HeatingFuel><![CDATA[<?php echo $fuel; ?>]]></HeatingFuel>
                                                        <?php endforeach; ?>
                                                    <?php endif; ?>
                                                </HeatingFuels>

                                                <HeatingSystems>
                                                    <?php if($heating_system) :?>
                                                        <?php foreach ($heating_system as $single_heating_system) : ?>
                                                            <HeatingSystem><![CDATA[<?php echo $single_heating_system; ?>]]></HeatingSystem>
                                                        <?php endforeach; ?>
                                                    <?php endif; ?>
                                                </HeatingSystems>

                                                <RoofTypes>
                                                    <?php if($roof_type) :  ?>
                                                        <?php foreach ($roof_type as $roof) : ?>
                                                            <RoofType><![CDATA[<?php echo $roof; ?>]]></RoofType>
                                                        <?php endforeach; ?>
                                                    <?php endif; ?>
                                                </RoofTypes>

                                                <ParkingTypes>
                                                    <?php if(isset($parking_type)) :?>
                                                        <ParkingType><![CDATA[<?php echo $parking_type;?>]]></ParkingType>
                                                    <?php endif; ?>
                                                </ParkingTypes>
                                            </RichDetails>
                                        </Spec>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </Plan>
                    <?php endwhile; ?>
                <?php endif; ?>
            </Subdivision>
            <?php endwhile; ?>
    <?php endif; ?>
		</Builder>
   </Corporation>
</Builders>