watch("src/(.*)\.php") do |match|
  # clear_console
  run_test %{tests/#{match[1]}Test.php}
  puts "clase actualizada..."
end

watch("tests/(.*)/.*Test.php") do |match|
  # clear_console
  run_test match[0]
  puts "test actualizado..."
end

def run_test(file)
  unless File.exist?(file)
    puts "#{file} does not exist"
    return
  end
  puts "Running #{file}"
  result = `vendor/bin/phpunit #{file}`
  puts result
  if result.match(/OK/)
    notify "#{file}", "Tests Passed Successfuly", "dialog-ok.svg", 3000
  else
    notify_failed file, result
  end
end

def notify title, msg, img, show_time
  images_dir='/usr/share/icons/Humanity/actions/48'
  system "notify-send '#{title}' '#{msg}' -i #{images_dir}/#{img} -t #{show_time}"
end

def notify_failed cmd, result
  failed_examples = result.scan(/failure:\n\n(.*)\n/)
  notify "#{cmd}", failed_examples[0], "gtk-stop.svg", 6000
end

def clear_console
  puts "\e[H\e[2J"  #clear console
end
