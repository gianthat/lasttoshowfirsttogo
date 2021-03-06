set :stage, :production
set :branch, :master
set :deploy_to, "/home/lasttoshowfirsttogo/production"

# Extended Server Syntax
# ======================
server '104.131.82.20', user: 'lasttoshowfirsttogo', roles: %w{web app db}

# you can set custom ssh options
# it's possible to pass any option but you need to keep in mind that net/ssh understand limited list of options
# you can see them in [net/ssh documentation](http://net-ssh.github.io/net-ssh/classes/Net/SSH.html#method-c-start)
# set it globally
#  set :ssh_options, {
#    user: fetch(:user)
#  }

fetch(:default_env).merge!(wp_env: :production)
