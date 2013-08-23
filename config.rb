
preferred_syntax = :scss
http_path = '/'
css_dir = 'css'
sass_dir = 'scss'
images_dir = 'images'
javascripts_dir = 'js'
relative_assets = true

#output_style = :compressed
environment = :development


require 'fileutils'
on_stylesheet_saved do |file|
  if File.exists?(file) && File.basename(file) == "style.css"
    puts "Moving: #{file}"
    FileUtils.mv(file, File.dirname(file) + "/../" + File.basename(file))
  end
end