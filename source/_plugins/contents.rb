module Jekyll
  class Content < Liquid::Tag
    def initialize(tag_name, text, tokens)
      super
      @text = text
    end

    def render(context)
      answer = '<h2>Оглавление</h2>'

      pages = context.registers[:site].pages
                  .select { |page|  page.dir =~ /^#{Regexp.escape(@text)}.+/  }
                  .select { |page|  page.data["hidden"] != true  }
                  .sort_by { |page| page.data["title"] }
                  .sort_by { |page| page.data["categories"][0] }

      categories = []
      pages.each { |page| categories.push(page.data["categories"][0])}
      categories = categories.uniq

      answer += '<ul>'

      categories.each do |category|
        answer += "<li><span>#{category}</span><ul>"
        pages.each do |page|
          if category == page.data["categories"][0] then
            answer += "<li><a href='#{page.dir}#{page.basename}.html'>#{page.data["title"]}</a></li>"
          end
        end
        answer += '</ul></li>'
      end

      answer += '</ul>'

      # context.registers[:site].pages
      #    .select { |page|  page.dir =~ /^#{Regexp.escape(@text)}.+/  }
      #    .select { |page|  page.data["hidden"] != true  }
      #    .sort_by { |page| page.data["title"] }
      #    .sort_by { |page| page.data["categories"][0] }
      #    .each { |page| answer += "<li><a href='#{page.dir}#{page.basename}.html'>#{page.data["categories"][0]} :: #{page.data["title"]}</a></li>"}
      return answer
    end
  end
end

Liquid::Template.register_tag('contents', Jekyll::Content)
