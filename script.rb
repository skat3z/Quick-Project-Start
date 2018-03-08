def compile_haml
### HEAD ###
  %x[haml header.haml header.html]	
	
### BODY PAGES ###
  %x[haml haml-pages/index.haml haml-pages/index.html]

### FOOTER ###
  %x[haml footer.haml footer.html]	

end

watch(".*\.haml$") { |x|
  compile_haml
}