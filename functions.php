<?php

// Function to generate image galleries automatically
function make_gallery($folder_name) {
    // Set up the path to the images folder
    $dirname = "images/$folder_name/";
    
    // Get all .jpg files from the folder
    $images = glob($dirname."*.jpg");
  
    // Loop through each image
    foreach($images as $image) {
        
        // Set default title to filename in case EXIF doesn't work
        $title = basename($image);
        
        // Try to read EXIF data from image
        $exif = exif_read_data($image, 0, true);
        
        // Check if EXIF data exists
        if ($exif !== false) {
            
            // Look through EXIF data for title
            foreach ($exif as $key => $section) {
                foreach ($section as $name => $val) {
                    
                    // If we find the title field
                    if($key == 'IFD0' && $name == "Title") {
                        // Clean up the title (remove special characters)
                        $title = preg_replace('/[^A-Za-z0-9\- ()]/','',$val);
                        break 2; // Exit loops once title is found
                    }
                }
            }
        }
        ?>
    
        <!-- Gallery item container -->
        <div class="responsive-gallery">
            <div class="gallery">
                <!-- Link opens lightbox when clicked -->
                <a href="<?php echo $image; ?>" class="big">
                    <!-- Display the image with title -->
                    <img class="responsive" 
                         src="<?php echo $image; ?>" 
                         alt="<?php echo htmlspecialchars($title); ?>" 
                         title="<?php echo htmlspecialchars($title); ?>" />
                </a>
            </div>
        </div>
        
        <?php  
    }
}
?>