module Jekyll
  class BsWarn < Liquid::Block
    def initialize(tag_name, text, tokens)
      super
    end

    def render(context)
      "<div class='row justify-content-end'>
          <div class='qa answer col-10 alert alert-warning'>
              <span>#{Kramdown::Document.new(super).to_html}</span>
              <i class='fas fa-exclamation-triangle'></i>
          </div>
      </div>"
    end
  end

  class Fancybox < Liquid::Tag
    def initialize(tag_name, text, tokens)
      super
      @text = text.split(' ')
      @url = @text[0]
      @width = @text[1].nil? ? '640' : @text[1]
      @height = @text[2].nil? ? '360' : @text[2]
    end

    def render(_context)
      "<a data-fancybox='gallery' href='#{@url}'>
          <img src='#{@url}' width='#{@width}' height='#{@height}'>
        </a>"
    end
  end

  class QaAnswer < Liquid::Block
    def initialize(tag_name, text, tokens)
      super
    end

    def render(context)
      "<div class='row justify-content-end'>
          <div class='qa answer col-10 alert alert-success'>
              <span>#{Kramdown::Document.new(super).to_html}</span>
              <i class='fas fa-exclamation-circle'></i>
          </div>
      </div>"
    end
  end

  class QaQuestion < Liquid::Block
    def initialize(tag_name, text, tokens)
      super
    end

    def render(context)
      "<div class='row justify-content-start'><div class='qa question col-10 alert alert-primary'>
          <i class='fas fa-question-circle'></i> <h2>#{Kramdown::Document.new(super).to_html}</h2>
      </div></div>"
    end
  end

  class Reference < Liquid::Block
    def initialize(tag_name, text, tokens)
      super
      @text = text
    end

    def render(context)
      "<div class='alert alert-light' role='alert'>
        <h6 id='ref#{@text}'>
          <span class='num'>#{@text}</span>
          <a href='#reflink#{@text}'><i class='fas fa-arrow-alt-circle-up'></i></a>
          <span class='txt'>#{Kramdown::Document.new(super).to_html}</span>
        </h6>
      </div>"
    end
  end

  class RefLink < Liquid::Tag
    def initialize(tag_name, text, tokens)
      super
      @text = text
    end

    def render(_context)
      "<sup id='reflink#{@text}'><a href='#ref#{@text}'>[#{@text}]</a></sup>"
    end
  end

  class WrapLink < Liquid::Tag
    def initialize(tag_name, text, tokens)
      super
      @text = text
    end

    def render(_context)
      "<a href='#{@text}'>#{@text}</a>"
    end
  end
end

Liquid::Template.register_tag('BsWarn', Jekyll::BsWarn)
Liquid::Template.register_tag('Fancybox', Jekyll::Fancybox)
Liquid::Template.register_tag('answer', Jekyll::QaAnswer)
Liquid::Template.register_tag('question', Jekyll::QaQuestion)
Liquid::Template.register_tag('Refer', Jekyll::Reference)
Liquid::Template.register_tag('RefLink', Jekyll::RefLink)
Liquid::Template.register_tag('link', Jekyll::WrapLink)
