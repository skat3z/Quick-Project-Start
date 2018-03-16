def compile_haml
### HEAD ###
  %x[haml header.haml header.html]	
	
### BODY PAGES ###
  %x[haml haml-pages/home.haml haml-pages/home.html]

### FOOTER ###
  %x[haml footer.haml footer.html]	

end

watch(".*\.haml$") { |x|
  compile_haml
}
