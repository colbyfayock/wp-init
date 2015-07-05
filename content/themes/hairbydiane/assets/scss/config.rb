http_path = "/"

css_dir = "../css"
sass_dir = "./"
relative_assets = true

output_style = :compressed
line_comments = false

preferred_syntax = :scss

# http://css-tricks.com/compass-compiling-and-wordpress-themes/
require 'fileutils'
on_stylesheet_saved do |file|
  if File.exists?(file) && File.basename(file) == "style.css"
    puts "Moving: #{file}"
    FileUtils.mv(file, File.dirname(file) + "/../../" + File.basename(file))
  end
end